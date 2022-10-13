<?php

namespace Hopex\VkSdk\Exceptions\Api\Confirmation;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class NeedConfirmationException
 * @package Hopex\VkSdk\Exceptions\Api\Common
 */
class NeedConfirmationException extends ApiException
{
    /**
     * NeedConfirmationException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(24, __('vk-sdk.0136'), $error);
	}
}

