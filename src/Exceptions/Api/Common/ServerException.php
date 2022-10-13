<?php

namespace Hopex\VkSdk\Exceptions\Api\Common;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class ServerException
 * @package Hopex\VkSdk\Exceptions\Api\Common
 */
class ServerException extends ApiException
{
    /**
     * ServerException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(10, __('vk-sdk.0147'), $error);
	}
}

