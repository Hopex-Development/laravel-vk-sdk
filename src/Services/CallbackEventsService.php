<?php

namespace Hopex\VkSdk\Services;

use Hopex\VkSdk\Contracts\CallbackEventsContract;
use Hopex\VkSdk\Exceptions\Callback\SecretException;
use Hopex\VkSdk\Exceptions\Callback\UnknownEventException;
use Hopex\VkSdk\Exceptions\Callback\UnknownGroupIdException;
use Hopex\VkSdk\Exceptions\Callback\UnknownVkEntityException;
use Hopex\VkSdk\Exceptions\Database\DatabaseOrTableNotFoundException;
use Hopex\VkSdk\Facades\SdkConfig;
use Hopex\VkSdk\Foundation\Core\Entities\Messages\MessageFields;
use Hopex\VkSdk\Models\VkEvent;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;
use Throwable;

class CallbackEventsService
{
    /** @var string */
    private const SUCCESS = 'ok';

    /** @var Request */
    public Request $request;

    /** @var Collection */
    private Collection $entities;

    /**
     * CallbackEventsService constructor.
     * @param Request $request
     * @throws Throwable
     */
    public function __construct(Request $request)
    {
        $this->entities = new Collection([
            'message' => MessageFields::class
        ]);

        $this->request = $request;
    }

    /**
     * @return string
     * @throws DatabaseOrTableNotFoundException
     * @throws Throwable
     * @throws UnknownVkEntityException
     */
    public function divide(): string
    {
        $groupId = $this->request->json('group_id');
        $eventId = $this->request->json('event_id');
        $event = $this->request->json('type');

        try {
            if (
                SdkConfig::groups("$groupId.allow_retry_events") ||
                !VkEvent::where('event_id', $eventId)->first() ||
                !$eventId
            ) {
                VkEvent::updateOrCreate($this->request->only('group_id', 'type', 'event_id'));
            } else {
                return self::SUCCESS;
            }
        } catch (QueryException) {
            throw new DatabaseOrTableNotFoundException();
        }

        switch ($event) {
            case 'confirmation':
                $code = SdkConfig::groups("$groupId.confirmation");
                throw_if(empty($code), UnknownGroupIdException::class);
                return $code;
            default:
                throw_if(
                    !method_exists(CallbackEventsContract::class, $event),
                    UnknownEventException::class
                );

                throw_if(
                    SdkConfig::groups("$groupId.secret.verify") &&
                    SdkConfig::groups("$groupId.secret.code") != $this->request->json('secret'),
                    SecretException::class
                );

                $this->updateAccesses($groupId);
                call_user_func(
                    [new (SdkConfig::groups("$groupId.events_handler")), $event],
                    $this->selectEntityByRequest()
                );

                return self::SUCCESS;
        }
    }

    /**
     * @param int $groupId
     * @return void
     */
    private function updateAccesses(int $groupId): void
    {
        Session::put('service_token', SdkConfig::authApp('token'));
        Session::put('group_token', SdkConfig::groups("$groupId.token"));
        Session::put('group_id', $groupId);
    }

    /**
     * @return mixed
     * @throws UnknownVkEntityException
     */
    private function selectEntityByRequest(): mixed
    {
        $object = collect($this->request->json('object'));
        $entityType = $object->keys()->first();
        $entityItems = collect($object->get($entityType));

        if (!$this->entities->has($entityType)) {
            throw new UnknownVkEntityException();
        }

        return new ($this->entities->get($entityType))($entityItems);
    }
}
