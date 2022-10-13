<?php

namespace Hopex\VkSdk\Exceptions\Api\Accesses;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class AccessGroupException
 * @package Hopex\VkSdk\Exceptions\Api\Accesses
 */
class AccessGroupException extends ApiException
{
    /**
     * AccessGroupException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(203, __('vk-sdk.0003'), $error);
	}
}
