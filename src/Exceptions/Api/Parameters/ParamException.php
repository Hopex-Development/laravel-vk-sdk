<?php

namespace Hopex\VkSdk\Exceptions\Api\Parameters;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class ParamException
 * @package Hopex\VkSdk\Exceptions\Api\Parameters
 */
class ParamException extends ApiException
{
    /**
     * ParamException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(100, __('vk-sdk.0045'), $error);
	}
}
