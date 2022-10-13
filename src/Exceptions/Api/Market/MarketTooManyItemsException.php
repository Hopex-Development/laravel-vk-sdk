<?php

namespace Hopex\VkSdk\Exceptions\Api\Market;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MarketTooManyItemsException
 * @package Hopex\VkSdk\Exceptions\Api\Market
 */
class MarketTooManyItemsException extends ApiException
{
    /**
     * MarketTooManyItemsException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(1405, __('vk-sdk.0095'), $error);
	}
}
