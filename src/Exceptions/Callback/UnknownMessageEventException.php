<?php

namespace Hopex\VkSdk\Exceptions\Callback;

use Hopex\VkSdk\Exceptions\SdkException;

/**
 * Class UnknownMessageEventException
 * @package Hopex\VkSdk\Exceptions\Callback
 */
class UnknownMessageEventException extends SdkException
{
    public $message = 'Unknown callback message event';
}
