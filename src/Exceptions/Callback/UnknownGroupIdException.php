<?php

namespace Hopex\VkSdk\Exceptions\Callback;

use Hopex\VkSdk\Exceptions\SdkException;

/**
 * Class UnknownGroupIdException
 * @package Hopex\VkSdk\Exceptions\Callback
 */
class UnknownGroupIdException extends SdkException
{
    public $message = 'Unknown community id';
}
