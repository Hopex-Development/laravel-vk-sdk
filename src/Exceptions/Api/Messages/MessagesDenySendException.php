<?php

namespace Hopex\VkSdk\Exceptions\Api\Messages;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MessagesDenySendException
 * @package Hopex\VkSdk\Exceptions\Api\Messages
 */
class MessagesDenySendException extends ApiException
{
    /**
     * MessagesDenySendException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(901, __('vk-sdk.0109'), $error);
	}
}

