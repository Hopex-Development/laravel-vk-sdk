<?php

namespace Hopex\VkSdk\Exceptions\Api\Common;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class UserDeletedException
 * @package Hopex\VkSdk\Exceptions\Api\Common
 */
class UserDeletedException extends ApiException
{
    /**
     * UserDeletedException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(18, __('vk-sdk.0154'), $error);
	}
}

