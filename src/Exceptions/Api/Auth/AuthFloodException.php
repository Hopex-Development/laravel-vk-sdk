<?php

namespace Hopex\VkSdk\Exceptions\Api\Auth;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class AuthFloodException
 * @package Hopex\VkSdk\Exceptions\Api\Auth
 */
class AuthFloodException extends ApiException
{
    /**
     * AuthFloodException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(1105, __('vk-sdk.0021'), $error);
	}
}
