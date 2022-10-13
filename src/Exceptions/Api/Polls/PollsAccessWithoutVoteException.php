<?php

namespace Hopex\VkSdk\Exceptions\Api\Polls;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class PollsAccessWithoutVoteException
 * @package VK\Exceptions\Api
 */
class PollsAccessWithoutVoteException extends ApiException
{
    /**
     * PollsAccessWithoutVoteException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(253, __('vk-sdk.0058'), $error);
	}
}
