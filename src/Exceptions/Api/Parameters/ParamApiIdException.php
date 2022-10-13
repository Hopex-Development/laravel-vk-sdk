<?php

namespace Hopex\VkSdk\Exceptions\Api\Parameters;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class ParamApiIdException
 * @package Hopex\VkSdk\Exceptions\Api\Parameters
 */
class ParamApiIdException extends ApiException
{
    /**
     * ParamApiIdException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(101, __('vk-sdk.0040'), $error);
	}
}
