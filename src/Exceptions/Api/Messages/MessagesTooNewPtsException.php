<?php

namespace Hopex\VkSdk\Exceptions\Api\Messages;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MessagesTooNewPtsException
 * @package Hopex\VkSdk\Exceptions\Api\Messages
 */
class MessagesTooNewPtsException extends ApiException
{
    /**
     * MessagesTooNewPtsException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(908, __('vk-sdk.0121'), $error);
	}
}

