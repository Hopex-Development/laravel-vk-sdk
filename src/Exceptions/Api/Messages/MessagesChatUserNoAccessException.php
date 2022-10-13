<?php

namespace Hopex\VkSdk\Exceptions\Api\Messages;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MessagesChatUserNoAccessException
 * @package Hopex\VkSdk\Exceptions\Api\Messages
 */
class MessagesChatUserNoAccessException extends ApiException
{
    /**
     * MessagesChatUserNoAccessException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(917, __('vk-sdk.0106'), $error);
	}
}

