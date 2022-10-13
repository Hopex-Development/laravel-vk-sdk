<?php

namespace Hopex\VkSdk\Exceptions\Api\Parameters;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class ParamPhoneException
 * @package Hopex\VkSdk\Exceptions\Api\Parameters
 */
class ParamPhoneException extends ApiException
{
    /**
     * ParamPhoneException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(1000, __('vk-sdk.0050'), $error);
	}
}
