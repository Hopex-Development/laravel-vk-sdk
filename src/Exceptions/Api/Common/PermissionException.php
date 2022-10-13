<?php

namespace Hopex\VkSdk\Exceptions\Api\Common;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class PermissionException
 * @package Hopex\VkSdk\Exceptions\Api\Common
 */
class PermissionException extends ApiException
{
    /**
     * PermissionException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(7, __('vk-sdk.0139'), $error);
	}
}

