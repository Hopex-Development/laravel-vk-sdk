<?php

namespace Hopex\VkSdk\Exceptions\Api\Common;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class UploadException
 * @package Hopex\VkSdk\Exceptions\Api\Common
 */
class UploadException extends ApiException
{
    /**
     * UploadException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(22, __('vk-sdk.0153'), $error);
	}
}

