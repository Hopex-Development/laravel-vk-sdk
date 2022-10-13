<?php

namespace Hopex\VkSdk\Exceptions\Api\Market;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MarketItemHasBadLinksException
 * @package Hopex\VkSdk\Exceptions\Api\Market
 */
class MarketItemHasBadLinksException extends ApiException
{
    /**
     * MarketItemHasBadLinksException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(1408, __('vk-sdk.0090'), $error);
	}
}
