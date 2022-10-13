<?php

namespace Hopex\VkSdk\Exceptions\Api\Walls;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class WallAccessCommentException
 * @package Hopex\VkSdk\Exceptions\Api\Walls
 */
class WallAccessCommentException extends ApiException
{
    /**
     * WallAccessCommentException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(211, __('vk-sdk.0068'), $error);
	}
}
