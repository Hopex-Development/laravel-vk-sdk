<?php

namespace Hopex\VkSdk\Exceptions\Api\Common;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class LimitsException
 * @package Hopex\VkSdk\Exceptions\Api\Common
 */
class LimitsException extends ApiException
{
    /**
     * LimitsException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(103, __('vk-sdk.0134'), $error);
	}
}

