<?php

namespace Hopex\VkSdk\Exceptions\Api\Common;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class PhotoChangedException
 * @package Hopex\VkSdk\Exceptions\Api\Common
 */
class PhotoChangedException extends ApiException
{
    /**
     * PhotoChangedException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(1160, __('vk-sdk.0141'), $error);
	}
}

