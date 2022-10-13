<?php

namespace Hopex\VkSdk\Exceptions\Api\Messages;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MessagesTooManyPostsException
 * @package Hopex\VkSdk\Exceptions\Api\Messages
 */
class MessagesTooManyPostsException extends ApiException
{
    /**
     * MessagesTooManyPostsException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(940, __('vk-sdk.0120'), $error);
	}
}

