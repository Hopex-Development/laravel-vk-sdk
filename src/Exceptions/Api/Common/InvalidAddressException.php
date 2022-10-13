<?php

namespace Hopex\VkSdk\Exceptions\Api\Common;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class InvalidAddressException
 * @package Hopex\VkSdk\Exceptions\Api\Common
 */
class InvalidAddressException extends ApiException
{
    /**
     * InvalidAddressException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(1260, __('vk-sdk.0133'), $error);
	}
}

