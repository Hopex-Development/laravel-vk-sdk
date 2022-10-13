<?php

namespace Hopex\VkSdk\Exceptions\Callback;

use Throwable;

/**
 * Class UndefinedEventException
 * @package Hopex\VkSdk\Exceptions\Callback
 */
class UnknownEventException extends CallbackException
{
    public function __construct()
    {
        parent::__construct(__("vk-sdk.0158"), 403);
    }
}
