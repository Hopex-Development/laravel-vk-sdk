<?php

namespace Hopex\VkSdk\Exceptions\Api\Groups;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class GroupNeed2FaException
 * @package Hopex\VkSdk\Exceptions\Api\Groups
 */
class GroupNeed2FaException extends ApiException
{
    /**
     * GroupNeed2FaException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(703, __('vk-sdk.0081'), $error);
	}
}
