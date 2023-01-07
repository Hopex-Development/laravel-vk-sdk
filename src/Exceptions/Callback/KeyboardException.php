<?php

namespace Hopex\VkSdk\Exceptions\Callback;

use Hopex\VkSdk\Exceptions\SdkException;

/**
 * Class KeyboardException
 * @package Hopex\VkSdk\Exceptions\Callback
 */
class KeyboardException extends SdkException
{
    public $message = 'Target keyboard source file not found';
}
