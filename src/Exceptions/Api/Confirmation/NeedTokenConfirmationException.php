<?php

namespace Hopex\VkSdk\Exceptions\Api\Confirmation;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class NeedTokenConfirmationException
 * @package Hopex\VkSdk\Exceptions\Api\Common
 */
class NeedTokenConfirmationException extends ApiException
{
    /**
     * NeedTokenConfirmationException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(25, __('vk-sdk.0137'), $error);
	}
}

