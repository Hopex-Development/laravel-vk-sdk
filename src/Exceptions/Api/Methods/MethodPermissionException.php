<?php

namespace Hopex\VkSdk\Exceptions\Api\Methods;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MethodPermissionException
 * @package Hopex\VkSdk\Exceptions\Api\Methods
 */
class MethodPermissionException extends ApiException
{
    /**
     * MethodPermissionException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(20, __('vk-sdk.0038'), $error);
	}
}
