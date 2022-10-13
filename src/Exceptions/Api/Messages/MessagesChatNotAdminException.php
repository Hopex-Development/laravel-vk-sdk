<?php

namespace Hopex\VkSdk\Exceptions\Api\Messages;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MessagesChatNotAdminException
 * @package Hopex\VkSdk\Exceptions\Api\Messages
 */
class MessagesChatNotAdminException extends ApiException
{
    /**
     * MessagesChatNotAdminException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(925, __('vk-sdk.0104'), $error);
	}
}

