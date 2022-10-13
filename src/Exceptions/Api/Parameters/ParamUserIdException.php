<?php

namespace Hopex\VkSdk\Exceptions\Api\Parameters;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class ParamUserIdException
 * @package Hopex\VkSdk\Exceptions\Api\Parameters
 */
class ParamUserIdException extends ApiException
{
    /**
     * ParamUserIdException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(113, __('vk-sdk.0056'), $error);
	}
}
