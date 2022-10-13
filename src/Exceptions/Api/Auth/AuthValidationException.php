<?php

namespace Hopex\VkSdk\Exceptions\Api\Auth;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class AuthValidationException
 * @package Hopex\VkSdk\Exceptions\Api\Auth
 */
class AuthValidationException extends ApiException
{
    /**
     * AuthValidationException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(17, __('vk-sdk.0023'), $error);
	}
}
