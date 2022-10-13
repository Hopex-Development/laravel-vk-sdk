<?php

namespace Hopex\VkSdk\Exceptions\Api\Parameters;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class ParamDocAccessException
 * @package Hopex\VkSdk\Exceptions\Api\Parameters
 */
class ParamDocAccessException extends ApiException
{
    /**
     * ParamDocAccessException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(1153, __('vk-sdk.0041'), $error);
	}
}
