<?php

namespace Hopex\VkSdk\Exceptions\Api\Messages;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MessagesChatUserNotInChatException
 * @package Hopex\VkSdk\Exceptions\Api\Messages
 */
class MessagesChatUserNotInChatException extends ApiException
{
    /**
     * MessagesChatUserNotInChatException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(935, __('vk-sdk.0107'), $error);
	}
}

