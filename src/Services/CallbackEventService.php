<?php

namespace Hopex\VkSdk\Services;

use Hopex\VkSdk\Contracts\CallbackEventsContract;
use Hopex\VkSdk\Contracts\EventEntityContract;
use Hopex\VkSdk\Exceptions\Callback\SecretException;
use Hopex\VkSdk\Exceptions\Callback\UnknownEntityException;
use Hopex\VkSdk\Exceptions\Callback\UnknownEventException;
use Hopex\VkSdk\Exceptions\Callback\UnknownGroupIdException;
use Hopex\VkSdk\Exceptions\Database\DatabaseOrTableNotFoundException;
use Hopex\VkSdk\Facades\SdkConfig;
use Hopex\VkSdk\Foundation\Core\Entities\Messages\MessageFields;
use Hopex\VkSdk\Models\Event;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Throwable;

class CallbackEventService
{
    /** @var string */
    private const OK = 'ok';
    /** @var Request */
    public Request $request;
    /** @var Collection */
    private Collection $entities;

    /**
     * CallbackEventService constructor.
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
     * @return string|array|null
     * @throws Throwable
     * @throws UnknownGroupIdException
     */
    public function division(): string|array|null
    {
        $groupId = $this->request->json('group_id');
        $eventId = $this->request->json('event_id');
        $event = $this->request->json('type');

        try {
            if (
                SdkConfig::groups("$groupId.allow_retry_events") ||
                !Event::where('event_id', $eventId)->first() ||
                !$eventId
            ) {
                Event::updateOrCreate($this->request->only('group_id', 'type', 'event_id'));
            } else {
                return self::OK;
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
                call_user_func(
                    [new (SdkConfig::groups("$groupId.events")), $event],
//                    new BaseEvent(collect($this->request->only(['group_id', 'object'])))
                    $this->selectEntityByRequest()
                );

                return self::OK;
        }
    }

    /**
     * @return mixed
     * @throws UnknownEntityException
     */
    public function selectEntityByRequest(): mixed
    {
        $object = collect($this->request->json('object'));
        $entityType = $object->keys()->first();
        $entityItems = collect($object->get($entityType));

        if (!$this->entities->has($entityType)) {
            throw new UnknownEntityException();
        }

        return new ($this->entities->get($entityType))($entityItems);
    }
}
