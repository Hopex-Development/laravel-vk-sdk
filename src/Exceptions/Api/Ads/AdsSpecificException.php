<?php

namespace Hopex\VkSdk\Exceptions\Api\Ads;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class AdsSpecificException
 * @package Hopex\VkSdk\Exceptions\Api\Ads
 */
class AdsSpecificException extends ApiException
{
    /**
     * AdsSpecificException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(603, __('vk-sdk.0012'), $error);
	}
}
