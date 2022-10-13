<?php

namespace Hopex\VkSdk\Exceptions\Api\Common;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class SaveFileException
 * @package Hopex\VkSdk\Exceptions\Api\Common
 */
class SaveFileException extends ApiException
{
    /**
     * SaveFileException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(105, __('vk-sdk.0146'), $error);
	}
}

