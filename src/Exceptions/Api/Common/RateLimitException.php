<?php

namespace Hopex\VkSdk\Exceptions\Api\Common;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class RateLimitException
 * @package Hopex\VkSdk\Exceptions\Api\Common
 */
class RateLimitException extends ApiException
{
    /**
     * RateLimitException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(29, __('vk-sdk.0143'), $error);
	}
}

