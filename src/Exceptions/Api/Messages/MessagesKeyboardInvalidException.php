<?php

namespace Hopex\VkSdk\Exceptions\Api\Messages;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MessagesKeyboardInvalidException
 * @package Hopex\VkSdk\Exceptions\Api\Messages
 */
class MessagesKeyboardInvalidException extends ApiException
{
    /**
     * MessagesKeyboardInvalidException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(911, __('vk-sdk.0113'), $error);
	}
}

