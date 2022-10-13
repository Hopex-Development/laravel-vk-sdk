<?php

namespace Hopex\VkSdk\Exceptions\Api\Messages;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MessagesTooBigException
 * @package Hopex\VkSdk\Exceptions\Api\Messages
 */
class MessagesTooBigException extends ApiException
{
    /**
     * MessagesTooBigException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(910, __('vk-sdk.0117'), $error);
	}
}

