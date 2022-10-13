<?php

namespace Hopex\VkSdk\Exceptions\Api\Walls;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class WallAdsPublishedException
 * @package Hopex\VkSdk\Exceptions\Api\Walls
 */
class WallAdsPublishedException extends ApiException
{
    /**
     * WallAdsPublishedException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(219, __('vk-sdk.0073'), $error);
	}
}
