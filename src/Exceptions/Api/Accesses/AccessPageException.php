<?php

namespace Hopex\VkSdk\Exceptions\Api\Accesses;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class AccessPageException
 * @package Hopex\VkSdk\Exceptions\Api\Accesses
 */
class AccessPageException extends ApiException
{
    /**
     * AccessPageException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(141, __('vk-sdk.0008'), $error);
	}
}
