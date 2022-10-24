<?php

namespace Hopex\VkSdk\Exceptions\Callback;

/**
 * Class SecretException
 * @package Hopex\VkSdk\Exceptions\Callback
 */
class SecretException extends CallbackException
{
    public function __construct()
    {
        parent::__construct(__("vk-sdk.0156"), 403);
    }
}
