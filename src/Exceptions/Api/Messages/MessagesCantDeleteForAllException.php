<?php

namespace Hopex\VkSdk\Exceptions\Api\Messages;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MessagesCantDeleteForAllException
 * @package Hopex\VkSdk\Exceptions\Api\Messages
 */
class MessagesCantDeleteForAllException extends ApiException
{
    /**
     * MessagesCantDeleteForAllException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(924, __('vk-sdk.0099'), $error);
	}
}

