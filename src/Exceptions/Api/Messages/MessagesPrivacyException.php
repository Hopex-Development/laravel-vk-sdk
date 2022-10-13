<?php

namespace Hopex\VkSdk\Exceptions\Api\Messages;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MessagesPrivacyException
 * @package Hopex\VkSdk\Exceptions\Api\Messages
 */
class MessagesPrivacyException extends ApiException
{
    /**
     * MessagesPrivacyException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(902, __('vk-sdk.0116'), $error);
	}
}

