<?php

namespace Hopex\VkSdk\Exceptions\Api\Apps;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class AppAuthException
 * @package Hopex\VkSdk\Exceptions\Api\Apps
 */
class AppAuthException extends ApiException
{
    /**
     * AppAuthException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(28, __('vk-sdk.0015'), $error);
	}
}
