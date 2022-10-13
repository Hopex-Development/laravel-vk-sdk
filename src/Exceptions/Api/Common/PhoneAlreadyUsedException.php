<?php

namespace Hopex\VkSdk\Exceptions\Api\Common;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class PhoneAlreadyUsedException
 * @package Hopex\VkSdk\Exceptions\Api\Common
 */
class PhoneAlreadyUsedException extends ApiException
{
    /**
     * PhoneAlreadyUsedException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(1004, __('vk-sdk.0140'), $error);
	}
}

