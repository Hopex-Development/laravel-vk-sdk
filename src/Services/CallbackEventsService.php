<?php

namespace Hopex\VkSdk\Services;

use Hopex\VkSdk\Exceptions\Api\DifferenceApiVersionException;
use Hopex\VkSdk\Exceptions\Callback\SecretCodeNotAuthenticatedException;
use Hopex\VkSdk\Exceptions\Callback\UnknownConfirmationCodeException;
use Hopex\VkSdk\Exceptions\Callback\UnknownEventException;
use Hopex\VkSdk\Exceptions\Callback\UnknownGroupIdException;
use Hopex\VkSdk\Exceptions\Callback\UnknownSecretCodeException;
use Hopex\VkSdk\Exceptions\Database\DatabaseOrTableNotFoundException;
use Hopex\VkSdk\Facades\Config;
use Hopex\VkSdk\Foundation\Core\Configuration\Models\Group as GroupConfig;
use Hopex\VkSdk\Models\Event;
use Hopex\VkSdk\Models\Group;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Throwable;

/**
 * Implements processing of incoming callback requests.
 *
 * @package Hopex\VkSdk\Services
 */
class CallbackEventsService
{
    /**
     * Success response code.
     *
     * @version SDK: 3
     *
     * @var string
     */
    private const SUCCESS = 'ok';

    /**
     * Input request.
     *
     * @version SDK: 3
     *
     * @var Request
     */
    public Request $request;

    /**
     * Implements processing of incoming callback requests.
     *
     * @version SDK: 3
     *
     * @param Request $request Input request.
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Redirects the input data to the handler specified in the configuration, passing the data converted into the
     * corresponding objects to it.
     *
     * @version SDK: 3
     *
     * @throws DatabaseOrTableNotFoundException
     * @throws Throwable
     *
     * @return string
     */
    public function divide(): string
    {
        $groupId = $this->request->json('group_id');
        $eventId = $this->request->json('event_id');
        $event = $this->request->json('type');
        $apiVersion = $this->request->json('v');
        $apiObject = $this->request->json('object');

        throw_if(
            $apiVersion != Config::api()->version(),
            DifferenceApiVersionException::class,
            $apiVersion,
            Config::api()->version()
        );

        /** @var Group $group Eloquent model of the group. */
        $group = Group::whereGroupId($groupId)->first();

        throw_if(!$group, UnknownGroupIdException::class, $groupId);

        $groupConfig = new GroupConfig($group->toArray());
        Session::push('group_id', $groupId);

        try {
            if ($groupConfig->allowRetryEvents() || (!empty($event) && !Event::whereEventId($eventId)->first())) {
                Event::updateOrCreate($this->request->only('group_id', 'type', 'event_id'));
            } else {
                return self::SUCCESS;
            }
        } catch (QueryException) {
            throw new DatabaseOrTableNotFoundException();
        }

        switch ($event) {
            case 'confirmation':
                $code = $groupConfig->confirmation();
                throw_if(empty($code), UnknownConfirmationCodeException::class, $groupId);

                return $code;
            default:
                throw_if(
                    $groupConfig->needSecretVerify() && empty($groupConfig->secretCode()),
                    UnknownSecretCodeException::class,
                    $groupId
                );

                throw_if(
                    $groupConfig->needSecretVerify() &&
                    $groupConfig->secretCode() != $this->request->json('secret'),
                    SecretCodeNotAuthenticatedException::class,
                    $this->request->json('secret'),
                    $groupConfig->secretCode()
                );

                throw_if(
                    !method_exists($groupConfig->callbackEventsHandler(), camel($event)),
                    UnknownEventException::class,
                    $event
                );

                $entity = collect($apiObject)->except('client_info')->keys()->first();
                call_user_func(
                    [new ($groupConfig->callbackEventsHandler())(), camel($event)],
                    new $entity(
                        data_get($apiObject, $entity),
                        data_get($apiObject, 'client_info', [])
                    )
                );

                return self::SUCCESS;
        }
    }
}
