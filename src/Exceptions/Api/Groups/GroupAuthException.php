<?php

namespace Hopex\VkSdk\Exceptions\Api\Groups;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class GroupAuthException
 * @package Hopex\VkSdk\Exceptions\Api\Groups
 */
class GroupAuthException extends ApiException
{
    /**
     * GroupAuthException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(27, __('vk-sdk.0078'), $error);
	}
}
