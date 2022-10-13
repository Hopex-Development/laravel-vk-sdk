<?php

namespace Hopex\VkSdk\Exceptions\Api\Common;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class EnabledInTestException
 * @package Hopex\VkSdk\Exceptions\Api\Common
 */
class EnabledInTestException extends ApiException
{
    /**
     * EnabledInTestException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(11, __('vk-sdk.0130'), $error);
	}
}

