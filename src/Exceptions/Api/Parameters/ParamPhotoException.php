<?php

namespace Hopex\VkSdk\Exceptions\Api\Parameters;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class ParamPhotoException
 * @package Hopex\VkSdk\Exceptions\Api\Parameters
 */
class ParamPhotoException extends ApiException
{
    /**
     * ParamPhotoException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(129, __('vk-sdk.0051'), $error);
	}
}
