<?php

namespace Hopex\VkSdk\Exceptions\Api\Messages;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MessagesEditExpiredException
 * @package Hopex\VkSdk\Exceptions\Api\Messages
 */
class MessagesEditExpiredException extends ApiException
{
    /**
     * MessagesEditExpiredException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(909, __('vk-sdk.0110'), $error);
	}
}

