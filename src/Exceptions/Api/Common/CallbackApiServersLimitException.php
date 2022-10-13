<?php

namespace Hopex\VkSdk\Exceptions\Api\Common;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;


class CallbackApiServersLimitException extends ApiException
{
    /**
     * CallbackApiServersLimitException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(2000, __('vk-sdk.0127'), $error);
	}
}

