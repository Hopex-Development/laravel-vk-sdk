<?php

namespace Hopex\VkSdk\Exceptions\Api\Ads;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class AdsPartialSuccessException
 * @package Hopex\VkSdk\Exceptions\Api\Ads
 */
class AdsPartialSuccessException extends ApiException
{
    /**
     * AdsPartialSuccessException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(602, __('vk-sdk.0010'), $error);
	}
}
