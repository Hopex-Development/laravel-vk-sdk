<?php

namespace Hopex\VkSdk\Exceptions\Api\Apps;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class AppsSubscriptionNotFoundException
 * @package Hopex\VkSdk\Exceptions\Api\Apps
 */
class AppsSubscriptionNotFoundException extends ApiException
{
    /**
     * AppsSubscriptionNotFoundException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(1256, __('vk-sdk.0018'), $error);
	}
}
