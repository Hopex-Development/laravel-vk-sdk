<?php

namespace Hopex\VkSdk\Exceptions\Api\Messages;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MessagesTooLongForwardsException
 * @package Hopex\VkSdk\Exceptions\Api\Messages
 */
class MessagesTooLongForwardsException extends ApiException
{
    /**
     * MessagesTooLongForwardsException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(913, __('vk-sdk.0118'), $error);
	}
}

