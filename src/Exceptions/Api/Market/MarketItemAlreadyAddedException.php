<?php

namespace Hopex\VkSdk\Exceptions\Api\Market;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MarketItemAlreadyAddedException
 * @package Hopex\VkSdk\Exceptions\Api\Market
 */
class MarketItemAlreadyAddedException extends ApiException
{
    /**
     * MarketItemAlreadyAddedException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(1404, __('vk-sdk.0089'), $error);
	}
}
