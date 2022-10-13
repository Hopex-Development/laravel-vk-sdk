<?php

namespace Hopex\VkSdk\Exceptions\Api\Common;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class BlockedException
 * @package Hopex\VkSdk\Exceptions\Api\Common
 */
class BlockedException extends ApiException
{
    /**
     * BlockedException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(19, __('vk-sdk.0126'), $error);
	}
}

