<?php

namespace Hopex\VkSdk\Exceptions\Api\Messages;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MessagesCantFwdException
 * @package Hopex\VkSdk\Exceptions\Api\Messages
 */
class MessagesCantFwdException extends ApiException
{
    /**
     * MessagesCantFwdException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(921, __('vk-sdk.0100'), $error);
	}
}

