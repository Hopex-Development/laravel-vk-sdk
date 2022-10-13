<?php

namespace Hopex\VkSdk\Exceptions\Api\Apps;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class AppsAlreadyUnlockedException
 * @package Hopex\VkSdk\Exceptions\Api\Apps
 */
class AppsAlreadyUnlockedException extends ApiException
{
	/**
	 * VKApiAppsAlreadyUnlockedException constructor.
	 *
	 * @param ApiError $error
	 */
	public function __construct(ApiError $error)
    {
		parent::__construct(1251, __('vk-sdk.0016'), $error);
	}
}
