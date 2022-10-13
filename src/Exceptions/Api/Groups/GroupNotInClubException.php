<?php

namespace Hopex\VkSdk\Exceptions\Api\Groups;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class GroupNotInClubException
 * @package Hopex\VkSdk\Exceptions\Api\Groups
 */
class GroupNotInClubException extends ApiException
{
    /**
     * GroupNotInClubException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(701, __('vk-sdk.0082'), $error);
	}
}
