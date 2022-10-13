<?php

namespace Hopex\VkSdk\Exceptions\Api\Common;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class UnknownException
 * @package Hopex\VkSdk\Exceptions\Api\Common
 */
class UnknownException extends ApiException
{
    /**
     * UnknownException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(1, __('vk-sdk.0152'), $error);
	}
}

