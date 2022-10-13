<?php

namespace Hopex\VkSdk\Exceptions\Api\Walls;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class WallAccessRepliesException
 * @package Hopex\VkSdk\Exceptions\Api\Walls
 */
class WallAccessRepliesException extends ApiException
{
    /**
     * WallAccessRepliesException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(212, __('vk-sdk.0070'), $error);
	}
}
