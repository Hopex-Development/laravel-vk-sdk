<?php

namespace Hopex\VkSdk\Exceptions\Api\Parameters;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class ParamPhotosException
 * @package Hopex\VkSdk\Exceptions\Api\Parameters
 */
class ParamPhotosException extends ApiException
{
    /**
     * ParamPhotosException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(122, __('vk-sdk.0052'), $error);
	}
}
