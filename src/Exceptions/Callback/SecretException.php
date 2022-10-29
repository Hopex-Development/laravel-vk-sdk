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
        parent::__construct("Access denied. The secret code of the event was not authenticated. Check the configuration settings.", 403);
    }
}
