<?php

namespace Hopex\VkSdk\Exceptions\Api\Messages;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MessagesChatBotFeatureException
 * @package Hopex\VkSdk\Exceptions\Api\Messages
 */
class MessagesChatBotFeatureException extends ApiException
{
    /**
     * MessagesChatBotFeatureException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(912, __('vk-sdk.0103'), $error);
	}
}

