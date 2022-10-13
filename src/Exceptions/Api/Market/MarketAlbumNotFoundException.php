<?php

namespace Hopex\VkSdk\Exceptions\Api\Market;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MarketAlbumNotFoundException
 * @package Hopex\VkSdk\Exceptions\Api\Market
 */
class MarketAlbumNotFoundException extends ApiException
{
    /**
     * MarketAlbumNotFoundException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(1402, __('vk-sdk.0085'), $error);
	}
}
