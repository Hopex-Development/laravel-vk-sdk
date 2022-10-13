<?php

namespace Hopex\VkSdk\Exceptions\Api\Methods;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MethodAdsException
 * @package Hopex\VkSdk\Exceptions\Api\Methods
 */
class MethodAdsException extends ApiException
{
    /**
     * MethodAdsException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(21, __('vk-sdk.0035'), $error);
	}
}
