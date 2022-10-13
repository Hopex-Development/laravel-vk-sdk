<?php

namespace Hopex\VkSdk\Exceptions\Api\Market;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MarketVariantNotFoundException
 * @package Hopex\VkSdk\Exceptions\Api\Market
 */
class MarketVariantNotFoundException extends ApiException
{
    /**
     * MarketVariantNotFoundException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(1416, __('vk-sdk.0097'), $error);
	}
}
