<?php

namespace Hopex\VkSdk\Exceptions\Api\Walls;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class WallLinksForbiddenException
 * @package Hopex\VkSdk\Exceptions\Api\Walls
 */
class WallLinksForbiddenException extends ApiException
{
    /**
     * WallLinksForbiddenException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(222, __('vk-sdk.0074'), $error);
	}
}
