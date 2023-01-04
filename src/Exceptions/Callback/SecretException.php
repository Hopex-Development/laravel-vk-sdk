<?php

namespace Hopex\VkSdk\Exceptions\Callback;

use Hopex\VkSdk\Exceptions\SdkException;

/**
 * Class SecretException
 * @package Hopex\VkSdk\Exceptions\Callback
 */
class SecretException extends SdkException
{
    public $message = 'Access denied. The secret code of the event was not authenticated. Check the configuration settings.';
}
