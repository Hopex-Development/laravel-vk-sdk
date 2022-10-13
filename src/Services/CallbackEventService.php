<?php

namespace Hopex\VkSdk\Services;

use Hopex\VkSdk\Contracts\CallbackEventsContract;
use Hopex\VkSdk\Exceptions\Callback\SecretException;
use Hopex\VkSdk\Exceptions\Callback\UnknownEventException;
use Hopex\VkSdk\Exceptions\Callback\UnknownGroupIdException;
use Hopex\VkSdk\Facades\Configure;
use Illuminate\Http\Request;
use Throwable;

class CallbackEventService
{
    /**
     * Входящий запрос.
     *
     * @var Request
     */
    private Request $request;

    /**
     * CallbackEventService constructor.
     *
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
        $event = $this->request->json('type');

        switch ($event) {
            case 'confirmation':
                $code = Configure::groups("{$groupId}.confirmation");
                throw_if(empty($code), UnknownGroupIdException::class);
                return $code;
            default:
                throw_if(!method_exists(CallbackEventsContract::class, $event), UnknownEventException::class);
                throw_if(
                    Configure::groups("{$groupId}.secret.verify") && Configure::groups("{$groupId}.secret.code") != $this->request->json('secret'),
                    SecretException::class
                );
                return call_user_func(
                    [new (Configure::groups("{$groupId}.events")), $event],
                    collect($this->request->only(['group_id', 'object']))
                );
        }
    }
}
