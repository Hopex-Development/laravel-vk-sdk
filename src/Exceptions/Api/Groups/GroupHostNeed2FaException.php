<?php

namespace Hopex\VkSdk\Exceptions\Api\Groups;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class GroupHostNeed2FaException
 * @package Hopex\VkSdk\Exceptions\Api\Groups
 */
class GroupHostNeed2FaException extends ApiException
{
    /**
     * GroupHostNeed2FaException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(704, __('vk-sdk.0080'), $error);
	}
}
