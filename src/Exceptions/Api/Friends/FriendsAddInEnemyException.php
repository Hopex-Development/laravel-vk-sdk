<?php

namespace Hopex\VkSdk\Exceptions\Api\Friends;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class FriendsAddInEnemyException
 * @package Hopex\VkSdk\Exceptions\Api\Friends
 */
class FriendsAddInEnemyException extends ApiException
{
    /**
     * FriendsAddInEnemyException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(175, __('vk-sdk.0030'), $error);
	}
}
