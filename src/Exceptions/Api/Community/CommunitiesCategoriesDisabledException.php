<?php

namespace Hopex\VkSdk\Exceptions\Api\Community;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class CommunitiesCategoriesDisabledException
 * @package Hopex\VkSdk\Exceptions\Api\Community
 */
class CommunitiesCategoriesDisabledException extends ApiException
{
    /**
     * CommunitiesCategoriesDisabledException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(1311,  __('vk-sdk.0028'), $error);
	}
}
