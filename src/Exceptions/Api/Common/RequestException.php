<?php

namespace Hopex\VkSdk\Exceptions\Api\Common;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class RequestException
 * @package Hopex\VkSdk\Exceptions\Api\Common
 */
class RequestException extends ApiException
{
    /**
     * RequestException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(8, __('vk-sdk.0144'), $error);
	}
}

