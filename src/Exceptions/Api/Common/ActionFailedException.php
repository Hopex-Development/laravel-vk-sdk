<?php

namespace Hopex\VkSdk\Exceptions\Api\Common;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class ActionFailedException
 * @package Hopex\VkSdk\Exceptions\Api\Common
 */
class ActionFailedException extends ApiException
{
    /**
     * ActionFailedException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(106, __('vk-sdk.0125'), $error);
	}
}

