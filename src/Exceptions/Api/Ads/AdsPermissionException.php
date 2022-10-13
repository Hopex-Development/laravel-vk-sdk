<?php

namespace Hopex\VkSdk\Exceptions\Api\Ads;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class AdsPermissionException
 * @package Hopex\VkSdk\Exceptions\Api\Ads
 */
class AdsPermissionException extends ApiException
{
    /**
     * AdsPermissionException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(600, __('vk-sdk.0011'), $error);
	}
}
