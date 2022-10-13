<?php

namespace Hopex\VkSdk\Exceptions\Api\Polls;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class PollsAccessException
 * @package VK\Exceptions\Api
 */
class PollsAccessException extends ApiException
{
    /**
     * PollsAccessException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(250, __('vk-sdk.0057'), $error);
	}
}
