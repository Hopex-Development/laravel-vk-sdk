<?php

namespace Hopex\VkSdk\Exceptions\Api\Auth;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class AuthHttpsException
 * @package Hopex\VkSdk\Exceptions\Api\Auth
 */
class AuthHttpsException extends ApiException
{
    /**
     * AuthHttpsException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(16, __('vk-sdk.0022'), $error);
	}
}
