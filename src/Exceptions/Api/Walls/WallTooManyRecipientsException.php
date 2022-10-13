<?php

namespace Hopex\VkSdk\Exceptions\Api\Walls;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class WallTooManyRecipientsException
 * @package Hopex\VkSdk\Exceptions\Api\Walls
 */
class WallTooManyRecipientsException extends ApiException
{
    /**
     * WallTooManyRecipientsException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(220, __('vk-sdk.0076'), $error);
	}
}
