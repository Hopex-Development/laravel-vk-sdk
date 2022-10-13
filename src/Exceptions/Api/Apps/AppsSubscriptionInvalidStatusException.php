<?php

namespace Hopex\VkSdk\Exceptions\Api\Apps;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class AppsSubscriptionInvalidStatusException
 * @package Hopex\VkSdk\Exceptions\Api\Apps
 */
class AppsSubscriptionInvalidStatusException extends ApiException
{
    /**
     * AppsSubscriptionInvalidStatusException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(1257, __('vk-sdk.0017'), $error);
	}
}
