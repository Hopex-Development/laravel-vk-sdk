<?php

namespace Hopex\VkSdk\Exceptions\Api\Common;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class InsufficientFundsException
 * @package Hopex\VkSdk\Exceptions\Api\Common
 */
class InsufficientFundsException extends ApiException
{
    /**
     * InsufficientFundsException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(147, __('vk-sdk.0132'), $error);
	}
}

