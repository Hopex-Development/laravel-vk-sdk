<?php

namespace Hopex\VkSdk\Exceptions\Api\Messages;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MessagesCantPinOneTimeStoryException
 * @package Hopex\VkSdk\Exceptions\Api\Messages
 */
class MessagesCantPinOneTimeStoryException extends ApiException
{
    /**
     * MessagesCantPinOneTimeStoryException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(942, __('vk-sdk.0101'), $error);
	}
}

