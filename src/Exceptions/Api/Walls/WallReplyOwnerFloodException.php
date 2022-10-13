<?php

namespace Hopex\VkSdk\Exceptions\Api\Walls;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class WallReplyOwnerFloodException
 * @package Hopex\VkSdk\Exceptions\Api\Walls
 */
class WallReplyOwnerFloodException extends ApiException
{
    /**
     * WallReplyOwnerFloodException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(223, __('vk-sdk.0075'), $error);
	}
}
