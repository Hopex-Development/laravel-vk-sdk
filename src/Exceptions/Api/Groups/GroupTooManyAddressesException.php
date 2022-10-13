<?php

namespace Hopex\VkSdk\Exceptions\Api\Groups;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class GroupTooManyAddressesException
 * @package Hopex\VkSdk\Exceptions\Api\Groups
 */
class GroupTooManyAddressesException extends ApiException
{
    /**
     * GroupTooManyAddressesException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(706, __('vk-sdk.0083'), $error);
	}
}
