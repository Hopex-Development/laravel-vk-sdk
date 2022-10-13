<?php

namespace Hopex\VkSdk\Exceptions\Api\Market;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MarketItemNotFoundException
 * @package Hopex\VkSdk\Exceptions\Api\Market
 */
class MarketItemNotFoundException extends ApiException
{
    /**
     * MarketItemNotFoundException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(1403, __('vk-sdk.0091'), $error);
	}
}
