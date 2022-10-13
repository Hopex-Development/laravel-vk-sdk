<?php

namespace Hopex\VkSdk\Exceptions\Api\Parameters;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class ParamHashException
 * @package Hopex\VkSdk\Exceptions\Api\Parameters
 */
class ParamHashException extends ApiException
{
    /**
     * ParamHashException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(121, __('vk-sdk.0047'), $error);
	}
}
