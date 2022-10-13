<?php

namespace Hopex\VkSdk\Exceptions\Api\Methods;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MethodDisabledException
 * @package Hopex\VkSdk\Exceptions\Api\Methods
 */
class MethodDisabledException extends ApiException
{
    /**
     * MethodDisabledException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(23, __('vk-sdk.0036'), $error);
	}
}
