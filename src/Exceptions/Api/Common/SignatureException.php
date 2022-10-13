<?php

namespace Hopex\VkSdk\Exceptions\Api\Common;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class SignatureException
 * @package Hopex\VkSdk\Exceptions\Api\Common
 */
class SignatureException extends ApiException
{
    /**
     * SignatureException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(4, __('vk-sdk.0148'), $error);
	}
}

