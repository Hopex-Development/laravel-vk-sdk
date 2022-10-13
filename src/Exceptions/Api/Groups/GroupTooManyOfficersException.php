<?php

namespace Hopex\VkSdk\Exceptions\Api\Groups;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class GroupTooManyOfficersException
 * @package Hopex\VkSdk\Exceptions\Api\Groups
 */
class GroupTooManyOfficersException extends ApiException
{
    /**
     * GroupTooManyOfficersException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(702, __('vk-sdk.0084'), $error);
	}
}
