<?php

namespace Hopex\VkSdk\Exceptions\Api\Market;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MarketPropertyNotFoundException
 * @package Hopex\VkSdk\Exceptions\Api\Market
 */
class MarketPropertyNotFoundException extends ApiException
{
    /**
     * MarketPropertyNotFoundException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(1417, __('vk-sdk.0092'), $error);
	}
}
