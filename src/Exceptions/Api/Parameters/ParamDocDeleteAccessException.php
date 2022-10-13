<?php

namespace Hopex\VkSdk\Exceptions\Api\Parameters;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class ParamDocDeleteAccessException
 * @package Hopex\VkSdk\Exceptions\Api\Parameters
 */
class ParamDocDeleteAccessException extends ApiException
{
    /**
     * ParamDocDeleteAccessException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(1151, __('vk-sdk.0042'), $error);
	}
}
