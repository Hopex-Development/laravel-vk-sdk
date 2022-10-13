<?php

namespace Hopex\VkSdk\Exceptions\Api\Walls;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class WallAdsPostLimitReachedException
 * @package Hopex\VkSdk\Exceptions\Api\Walls
 */
class WallAdsPostLimitReachedException extends ApiException
{
    /**
     * WallAdsPostLimitReachedException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(224, __('vk-sdk.0072'), $error);
	}
}
