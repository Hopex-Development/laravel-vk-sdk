<?php

namespace Hopex\VkSdk\Exceptions\Callback;

use Hopex\VkSdk\Exceptions\SdkException;

/**
 * Class UnknownEventException
 * @package Hopex\VkSdk\Exceptions\Callback
 */
class UnknownEventException extends SdkException
{
    public $message = 'Unknown callback event';
}
