<?php

namespace Hopex\VkSdk\Exceptions\Api\Messages;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MessagesTooOldPtsException
 * @package Hopex\VkSdk\Exceptions\Api\Messages
 */
class MessagesTooOldPtsException extends ApiException
{
    /**
     * MessagesTooOldPtsException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(907, __('vk-sdk.0122'), $error);
	}
}

