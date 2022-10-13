<?php

namespace Hopex\VkSdk\Exceptions\Api\Polls;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class PollsAnswerIdException
 * @package VK\Exceptions\Api
 */
class PollsAnswerIdException extends ApiException
{
    /**
     * PollsAnswerIdException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(252, __('vk-sdk.0059'), $error);
	}
}
