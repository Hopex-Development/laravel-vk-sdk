<?php

namespace Hopex\VkSdk\Exceptions\Api\Market;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MarketGroupingMustContainMoreThanOneItemException
 * @package Hopex\VkSdk\Exceptions\Api\Market
 */
class MarketGroupingMustContainMoreThanOneItemException extends ApiException
{
    /**
     * MarketGroupingMustContainMoreThanOneItemException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(1425, __('vk-sdk.0088'), $error);
	}
}
