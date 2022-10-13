<?php

namespace Hopex\VkSdk\Exceptions\Api\Votes;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class VotesException
 * @package VK\Exceptions\Api
 */
class VotesException extends ApiException
{
    /**
     * VotesException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(503, __('vk-sdk.0065'), $error);
	}
}
