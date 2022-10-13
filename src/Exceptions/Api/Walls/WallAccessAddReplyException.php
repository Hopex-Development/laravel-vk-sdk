<?php

namespace Hopex\VkSdk\Exceptions\Api\Walls;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class WallAccessAddReplyException
 * @package Hopex\VkSdk\Exceptions\Api\Walls
 */
class WallAccessAddReplyException extends ApiException
{
    /**
     * WallAccessAddReplyException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(213, __('vk-sdk.0067'), $error);
	}
}
