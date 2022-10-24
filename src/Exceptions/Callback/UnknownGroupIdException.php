<?php

namespace Hopex\VkSdk\Exceptions\Callback;

/**
 * Class UnknownGroupIdException
 * @package Hopex\VkSdk\Exceptions\Callback
 */
class UnknownGroupIdException extends CallbackException
{
    public function __construct()
    {
        parent::__construct(__("vk-sdk.0157"));
    }
}
