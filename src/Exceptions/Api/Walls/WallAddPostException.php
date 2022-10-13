<?php

namespace Hopex\VkSdk\Exceptions\Api\Walls;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class WallAddPostException
 * @package Hopex\VkSdk\Exceptions\Api\Walls
 */
class WallAddPostException extends ApiException
{
    /**
     * WallAddPostException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(214, __('vk-sdk.0071'), $error);
	}
}
