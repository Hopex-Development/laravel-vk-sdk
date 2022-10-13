<?php

namespace Hopex\VkSdk\Exceptions\Api\Friends;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class FriendsAddNotFoundException
 * @package Hopex\VkSdk\Exceptions\Api\Friends
 */
class FriendsAddNotFoundException extends ApiException
{
    /**
     * FriendsAddNotFoundException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(177, __('vk-sdk.0031'), $error);
	}
}
