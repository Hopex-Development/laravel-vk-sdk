<?php

namespace Hopex\VkSdk\Exceptions\Api\Common;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class NotFoundException
 * @package Hopex\VkSdk\Exceptions\Api\Common
 */
class NotFoundException extends ApiException
{
    /**
     * NotFoundException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(104, __('vk-sdk.0138'), $error);
	}
}

