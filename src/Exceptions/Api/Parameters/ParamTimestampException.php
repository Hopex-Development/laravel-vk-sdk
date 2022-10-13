<?php

namespace Hopex\VkSdk\Exceptions\Api\Parameters;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class ParamTimestampException
 * @package Hopex\VkSdk\Exceptions\Api\Parameters
 */
class ParamTimestampException extends ApiException
{
    /**
     * ParamTimestampException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(150, __('vk-sdk.0054'), $error);
	}
}
