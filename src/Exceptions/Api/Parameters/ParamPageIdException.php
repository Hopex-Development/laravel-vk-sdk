<?php

namespace Hopex\VkSdk\Exceptions\Api\Parameters;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class ParamPageIdException
 * @package Hopex\VkSdk\Exceptions\Api\Parameters
 */
class ParamPageIdException extends ApiException
{
    /**
     * ParamPageIdException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(140, __('vk-sdk.0049'), $error);
	}
}
