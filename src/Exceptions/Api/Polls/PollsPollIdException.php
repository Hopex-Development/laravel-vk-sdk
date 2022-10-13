<?php

namespace Hopex\VkSdk\Exceptions\Api\Polls;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class PollsPollIdException
 * @package VK\Exceptions\Api
 */
class PollsPollIdException extends ApiException
{
    /**
     * PollsPollIdException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(251, __('vk-sdk.0060'), $error);
	}
}
