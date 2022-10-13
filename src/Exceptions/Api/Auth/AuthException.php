<?php

namespace Hopex\VkSdk\Exceptions\Api\Auth;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class AuthException
 * @package Hopex\VkSdk\Exceptions\Api\Auth
 */
class AuthException extends ApiException
{
    /**
     * AuthException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(5, __('vk-sdk.0020'), $error);
	}
}
