<?php

namespace Hopex\VkSdk\Exceptions\Api\Friends;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class FriendsAddEnemyException
 * @package Hopex\VkSdk\Exceptions\Api\Friends
 */
class FriendsAddEnemyException extends ApiException
{
    /**
     * FriendsAddEnemyException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(176, __('vk-sdk.0029'), $error);
	}
}
