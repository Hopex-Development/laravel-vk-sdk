<?php

namespace Hopex\VkSdk\Exceptions\Api\Messages;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MessagesGroupPeerAccessException
 * @package Hopex\VkSdk\Exceptions\Api\Messages
 */
class MessagesGroupPeerAccessException extends ApiException
{
    /**
     * MessagesGroupPeerAccessException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(932, __('vk-sdk.0112'), $error);
	}
}

