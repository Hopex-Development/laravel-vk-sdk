<?php

namespace Hopex\VkSdk\Exceptions\Api\Auth;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class AuthDelayException
 * @package Hopex\VkSdk\Exceptions\Api\Auth
 */
class AuthDelayException extends ApiException
{
    /**
     * AuthDelayException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(1112, __('vk-sdk.0019'), $error);
	}
}
