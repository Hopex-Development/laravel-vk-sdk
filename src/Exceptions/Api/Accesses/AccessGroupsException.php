<?php

namespace Hopex\VkSdk\Exceptions\Api\Accesses;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class AccessGroupsException
 * @package Hopex\VkSdk\Exceptions\Api\Accesses
 */
class AccessGroupsException extends ApiException
{
    /**
     * AccessGroupsException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(260, __('vk-sdk.0004'), $error);
	}
}
