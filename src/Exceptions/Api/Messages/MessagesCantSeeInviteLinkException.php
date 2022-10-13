<?php

namespace Hopex\VkSdk\Exceptions\Api\Messages;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MessagesCantSeeInviteLinkException
 * @package Hopex\VkSdk\Exceptions\Api\Messages
 */
class MessagesCantSeeInviteLinkException extends ApiException
{
    /**
     * MessagesCantSeeInviteLinkException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(919, __('vk-sdk.0102'), $error);
	}
}

