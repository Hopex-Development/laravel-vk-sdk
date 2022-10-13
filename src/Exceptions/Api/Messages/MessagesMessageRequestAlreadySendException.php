<?php

namespace Hopex\VkSdk\Exceptions\Api\Messages;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MessagesMessageRequestAlreadySendException
 * @package Hopex\VkSdk\Exceptions\Api\Messages
 */
class MessagesMessageRequestAlreadySendException extends ApiException
{
    /**
     * MessagesMessageRequestAlreadySendException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(939, __('vk-sdk.0114'), $error);
	}
}

