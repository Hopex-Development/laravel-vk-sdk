<?php

namespace Hopex\VkSdk\Exceptions\Api\Accesses;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class AccessMenuException
 * @package Hopex\VkSdk\Exceptions\Api\Accesses
 */
class AccessMenuException extends ApiException
{
    /**
     * AccessMenuException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(148, __('vk-sdk.0005'), $error);
	}
}
