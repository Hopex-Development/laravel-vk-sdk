<?php

namespace Hopex\VkSdk\Exceptions\Api\Common;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class FloodException
 * @package Hopex\VkSdk\Exceptions\Api\Common
 */
class FloodException extends ApiException
{
    /**
     * FloodException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(9, __('vk-sdk.0131'), $error);
	}
}

