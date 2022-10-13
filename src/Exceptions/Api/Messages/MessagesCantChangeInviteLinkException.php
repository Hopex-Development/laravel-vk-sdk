<?php

namespace Hopex\VkSdk\Exceptions\Api\Messages;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MessagesCantChangeInviteLinkException
 * @package Hopex\VkSdk\Exceptions\Api\Messages
 */
class MessagesCantChangeInviteLinkException extends ApiException
{
    /**
     * MessagesCantChangeInviteLinkException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(931, __('vk-sdk.0098'), $error);
	}
}

