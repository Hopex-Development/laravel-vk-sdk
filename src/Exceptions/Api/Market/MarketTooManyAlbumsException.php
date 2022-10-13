<?php

namespace Hopex\VkSdk\Exceptions\Api\Market;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MarketTooManyAlbumsException
 * @package Hopex\VkSdk\Exceptions\Api\Market
 */
class MarketTooManyAlbumsException extends ApiException
{
    /**
     * MarketTooManyAlbumsException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(1407, __('vk-sdk.0094'), $error);
	}
}
