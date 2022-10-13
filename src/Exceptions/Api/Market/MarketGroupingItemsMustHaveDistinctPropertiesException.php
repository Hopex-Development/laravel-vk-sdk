<?php

namespace Hopex\VkSdk\Exceptions\Api\Market;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MarketGroupingItemsMustHaveDistinctPropertiesException
 * @package Hopex\VkSdk\Exceptions\Api\Market
 */
class MarketGroupingItemsMustHaveDistinctPropertiesException extends ApiException
{
    /**
     * MarketGroupingItemsMustHaveDistinctPropertiesException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(1426, __('vk-sdk.0087'), $error);
	}
}
