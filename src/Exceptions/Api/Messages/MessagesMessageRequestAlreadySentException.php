<?php

namespace Hopex\VkSdk\Exceptions\Api\Messages;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MessagesMessageRequestAlreadySentException
 * @package Hopex\VkSdk\Exceptions\Api\Messages
 */
class MessagesMessageRequestAlreadySentException extends ApiException
{
    /**
     * MessagesMessageRequestAlreadySentException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(939, __('vk-sdk.0115'), $error);
	}
}

