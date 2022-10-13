<?php

namespace Hopex\VkSdk\Exceptions\Api\Groups;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class GroupAppIsNotInstalledInCommunityException
 * @package Hopex\VkSdk\Exceptions\Api\Groups
 */
class GroupAppIsNotInstalledInCommunityException extends ApiException
{
    /**
     * GroupAppIsNotInstalledInCommunityException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(711, __('vk-sdk.0077'), $error);
	}
}
