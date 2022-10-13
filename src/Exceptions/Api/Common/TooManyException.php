<?php

namespace Hopex\VkSdk\Exceptions\Api\Common;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class TooManyException
 * @package Hopex\VkSdk\Exceptions\Api\Common
 */
class TooManyException extends ApiException
{
    /**
     * TooManyException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(6, __('vk-sdk.0150'), $error);
	}
}

