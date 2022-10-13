<?php

namespace Hopex\VkSdk\Exceptions\Api\Common;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class PrivateProfileException
 * @package Hopex\VkSdk\Exceptions\Api\Common
 */
class PrivateProfileException extends ApiException
{
    /**
     * PrivateProfileException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(30, __('vk-sdk.0142'), $error);
	}
}

