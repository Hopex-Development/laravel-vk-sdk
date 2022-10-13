<?php

namespace Hopex\VkSdk\Exceptions\Api\Messages;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MessagesEditKindDisallowedException
 * @package Hopex\VkSdk\Exceptions\Api\Messages
 */
class MessagesEditKindDisallowedException extends ApiException
{
    /**
     * MessagesEditKindDisallowedException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(920, __('vk-sdk.0111'), $error);
	}
}

