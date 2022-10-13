<?php

namespace Hopex\VkSdk\Exceptions\Api\Accesses;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class AccessVideoException
 * @package Hopex\VkSdk\Exceptions\Api\Accesses
 */
class AccessVideoException extends ApiException
{
    /**
     * AccessVideoException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(204, __('vk-sdk.0001'), $error);
	}
}
