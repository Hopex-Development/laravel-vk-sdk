<?php

namespace Hopex\VkSdk\Exceptions\Api\Ads;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class AdsObjectDeletedException
 * @package Hopex\VkSdk\Exceptions\Api\Ads
 */
class AdsObjectDeletedException extends ApiException
{
    /**
     * AdsObjectDeletedException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(629, __('vk-sdk.0009'), $error);
	}
}
