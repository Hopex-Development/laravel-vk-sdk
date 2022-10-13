<?php

namespace Hopex\VkSdk\Exceptions\Api\Common;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class TooManyListsException
 * @package Hopex\VkSdk\Exceptions\Api\Common
 */
class TooManyListsException extends ApiException
{
    /**
     * TooManyListsException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(1170, __('vk-sdk.0151'), $error);
	}
}

