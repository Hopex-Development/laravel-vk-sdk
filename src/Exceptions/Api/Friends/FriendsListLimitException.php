<?php

namespace Hopex\VkSdk\Exceptions\Api\Friends;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class FriendsListLimitException
 * @package Hopex\VkSdk\Exceptions\Api\Friends
 */
class FriendsListLimitException extends ApiException
{
    /**
     * FriendsListLimitException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(173, __('vk-sdk.0034'), $error);
	}
}
