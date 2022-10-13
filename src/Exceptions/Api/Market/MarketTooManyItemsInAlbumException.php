<?php

namespace Hopex\VkSdk\Exceptions\Api\Market;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MarketTooManyItemsInAlbumException
 * @package Hopex\VkSdk\Exceptions\Api\Market
 */
class MarketTooManyItemsInAlbumException extends ApiException
{
    /**
     * MarketTooManyItemsInAlbumException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(1406, __('vk-sdk.0096'), $error);
	}
}
