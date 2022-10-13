<?php

namespace Hopex\VkSdk\Exceptions\Api\Messages;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MessagesContactNotFoundException
 * @package Hopex\VkSdk\Exceptions\Api\Messages
 */
class MessagesContactNotFoundException extends ApiException
{
    /**
     * MessagesContactNotFoundException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(936, __('vk-sdk.0108'), $error);
	}
}

