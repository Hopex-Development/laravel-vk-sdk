<?php

namespace Hopex\VkSdk\Exceptions\Api\Messages;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MessagesUserBlockedException
 * @package Hopex\VkSdk\Exceptions\Api\Messages
 */
class MessagesUserBlockedException extends ApiException
{
    /**
     * MessagesUserBlockedException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(900, __('vk-sdk.0123'), $error);
	}
}

