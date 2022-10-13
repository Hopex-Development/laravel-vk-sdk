<?php

namespace Hopex\VkSdk\Exceptions\Api\Common;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class WeightedFloodException
 * @package Hopex\VkSdk\Exceptions\Api\Common
 */
class WeightedFloodException extends ApiException
{
    /**
     * WeightedFloodException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(601, __('vk-sdk.0155'), $error);
	}
}

