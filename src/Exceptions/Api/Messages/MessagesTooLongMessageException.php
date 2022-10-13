<?php

namespace Hopex\VkSdk\Exceptions\Api\Messages;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MessagesTooLongMessageException
 * @package Hopex\VkSdk\Exceptions\Api\Messages
 */
class MessagesTooLongMessageException extends ApiException
{
    /**
     * MessagesTooLongMessageException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(914, __('vk-sdk.0119'), $error);
	}
}

