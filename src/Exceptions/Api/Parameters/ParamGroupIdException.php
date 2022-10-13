<?php

namespace Hopex\VkSdk\Exceptions\Api\Parameters;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class ParamGroupIdException
 * @package Hopex\VkSdk\Exceptions\Api\Parameters
 */
class ParamGroupIdException extends ApiException
{
    /**
     * ParamGroupIdException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(125, __('vk-sdk.0046'), $error);
	}
}
