<?php

namespace Hopex\VkSdk\Exceptions\Api\Common;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class DisabledException
 * @package Hopex\VkSdk\Exceptions\Api\Common
 */
class DisabledException extends ApiException
{
    /**
     * DisabledException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(2, __('vk-sdk.0129'), $error);
	}
}

