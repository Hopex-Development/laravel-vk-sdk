<?php

namespace Hopex\VkSdk\Exceptions\Api\Market;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MarketRestoreTooLateException
 * @package Hopex\VkSdk\Exceptions\Api\Market
 */
class MarketRestoreTooLateException extends ApiException
{
    /**
     * MarketRestoreTooLateException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(1400, __('vk-sdk.0093'), $error);
	}
}
