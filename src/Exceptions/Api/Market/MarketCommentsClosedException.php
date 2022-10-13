<?php

namespace Hopex\VkSdk\Exceptions\Api\Market;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MarketCommentsClosedException
 * @package Hopex\VkSdk\Exceptions\Api\Market
 */
class MarketCommentsClosedException extends ApiException
{
    /**
     * MarketCommentsClosedException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(1401, __('vk-sdk.0086'), $error);
	}
}
