<?php

namespace Hopex\VkSdk\Exceptions\Api\Friends;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class FriendsListIdException
 * @package Hopex\VkSdk\Exceptions\Api\Friends
 */
class FriendsListIdException extends ApiException
{
    /**
     * FriendsListIdException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(171, __('vk-sdk.0033'), $error);
	}
}
