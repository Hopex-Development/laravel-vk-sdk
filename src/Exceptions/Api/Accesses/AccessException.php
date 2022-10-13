<?php

namespace Hopex\VkSdk\Exceptions\Api\Accesses;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class AccessException
 * @package Hopex\VkSdk\Exceptions\Api\Accesses
 */
class AccessException extends ApiException
{
    /**
     * AccessException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(15, __('vk-sdk.0001'), $error);
	}
}
