<?php

namespace Hopex\VkSdk\Exceptions\Callback;

use Hopex\VkSdk\Exceptions\SdkException;

/**
 * Class UnknownVkEntityException
 * @package Hopex\VkSdk\Exceptions\Callback
 */
class UnknownVkEntityException extends SdkException
{
    public $message = 'Unknown vk entity used';
}
