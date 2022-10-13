<?php

namespace Hopex\VkSdk\Exceptions\Api\Votes;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class VotesPermissionException
 * @package VK\Exceptions\Api
 */
class VotesPermissionException extends ApiException
{
    /**
     * VotesPermissionException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(500, __('vk-sdk.0066'), $error);
	}
}
