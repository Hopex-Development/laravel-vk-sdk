<?php

namespace Hopex\VkSdk\Exceptions\Api\Messages;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MessagesChatNotExistException
 * @package Hopex\VkSdk\Exceptions\Api\Messages
 */
class MessagesChatNotExistException extends ApiException
{
    /**
     * MessagesChatNotExistException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(927, __('vk-sdk.0105'), $error);
	}
}

