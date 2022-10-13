<?php

namespace Hopex\VkSdk\Exceptions\Api\Common;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class RuntimeException
 * @package Hopex\VkSdk\Exceptions\Api\Common
 */
class RuntimeException extends ApiException
{
    /**
     * RuntimeException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(13, __('vk-sdk.0145'), $error);
	}
}

