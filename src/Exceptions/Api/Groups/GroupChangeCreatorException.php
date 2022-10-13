<?php

namespace Hopex\VkSdk\Exceptions\Api\Groups;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class GroupChangeCreatorException
 * @package Hopex\VkSdk\Exceptions\Api\Groups
 */
class GroupChangeCreatorException extends ApiException
{
    /**
     * GroupChangeCreatorException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(700, __('vk-sdk.0079'), $error);
	}
}
