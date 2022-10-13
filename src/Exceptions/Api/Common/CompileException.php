<?php

namespace Hopex\VkSdk\Exceptions\Api\Common;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class CompileException
 * @package Hopex\VkSdk\Exceptions\Api\Common
 */
class CompileException extends ApiException
{
    /**
     * CompileException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(12, __('vk-sdk.0128'), $error);
	}
}

