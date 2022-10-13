<?php

namespace Hopex\VkSdk\Exceptions\Api\Friends;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class FriendsAddYourselfException
 * @package Hopex\VkSdk\Exceptions\Api\Friends
 */
class FriendsAddYourselfException extends ApiException
{
    /**
     * FriendsAddYourselfException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(174, __('vk-sdk.0032'), $error);
	}
}
