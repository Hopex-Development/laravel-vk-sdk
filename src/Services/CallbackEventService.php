<?php

namespace Hopex\VkSdk\Services;

use Hopex\VkSdk\Contracts\CallbackEventsContract;
use Hopex\VkSdk\Exceptions\Callback\SecretException;
use Hopex\VkSdk\Exceptions\Callback\UnknownEventException;
use Hopex\VkSdk\Exceptions\Callback\UnknownGroupIdException;
use Hopex\VkSdk\Facades\SdkConfig;
use Hopex\VkSdk\Foundation\Core\Callback\BaseEvent;
use Hopex\VkSdk\Models\Event;
use Illuminate\Http\Request;
use Throwable;

class CallbackEventService
{
    private const OK = 'ok';

    /**
     * @var Request
     */
    public Request $request;

    /**
     * CallbackEventService constructor.
     * @param Request $request
     * @throws Throwable
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @return mixed
     * @throws Throwable
     * @throws UnknownGroupIdException
     */
    public function division(): mixed
    {
        $groupId = $this->request->json('group_id');
        $eventId = $this->request->json('event_id');
        $event = $this->request->json('type');

        if (SdkConfig::groups("$groupId.allow_retry_events") || !Event::where('event_id', $eventId)->first()) {
            Event::updateOrCreate($this->request->only('group_id', 'type', 'event_id'));
        } else {
            return 'ok';
        }

        switch ($event) {
            case 'confirmation':
                $code = SdkConfig::groups("$groupId.confirmation");
                throw_if(empty($code), UnknownGroupIdException::class);
                return $code;
            default:
                throw_if(!method_exists(CallbackEventsContract::class, $event), UnknownEventException::class);
                throw_if(
                    SdkConfig::groups("$groupId.secret.verify") && SdkConfig::groups("$groupId.secret.code") != $this->request->json('secret'),
                    SecretException::class
                );
                call_user_func(
                    [new (SdkConfig::groups("$groupId.events")), $event],
                    new BaseEvent(collect($this->request->only(['group_id', 'object'])))
                );
                return self::OK;
        }
    }
}
