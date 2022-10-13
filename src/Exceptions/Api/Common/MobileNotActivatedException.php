<?php

namespace Hopex\VkSdk\Exceptions\Api\Common;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MobileNotActivatedException
 * @package Hopex\VkSdk\Exceptions\Api\Common
 */
class MobileNotActivatedException extends ApiException
{
    /**
     * MobileNotActivatedException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(146, __('vk-sdk.0135'), $error);
	}
}

