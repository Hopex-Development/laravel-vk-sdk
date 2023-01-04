<?php

namespace Hopex\VkSdk\Exceptions\Callback;

use Hopex\VkSdk\Exceptions\SdkException;

/**
 * Class UnknownEntityException
 * @package Hopex\VkSdk\Exceptions\Callback
 */
class UnknownEntityException extends SdkException
{
    public $message = 'Unknown or unsupported entity used';
}
