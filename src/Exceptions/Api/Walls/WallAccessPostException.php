<?php

namespace Hopex\VkSdk\Exceptions\Api\Walls;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class WallAccessPostException
 * @package Hopex\VkSdk\Exceptions\Api\Walls
 */
class WallAccessPostException extends ApiException
{
    /**
     * WallAccessPostException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(210, __('vk-sdk.0069'), $error);
	}
}
