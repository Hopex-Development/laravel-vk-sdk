<?php

namespace Hopex\VkSdk\Exceptions\Api\Parameters;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class ParamServerException
 * @package Hopex\VkSdk\Exceptions\Api\Parameters
 */
class ParamServerException extends ApiException
{
    /**
     * ParamServerException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(118, __('vk-sdk.0053'), $error);
	}
}
