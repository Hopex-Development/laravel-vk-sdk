<?php

namespace Hopex\VkSdk\Exceptions\Api\Community;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class CommunitiesCatalogDisabledException
 * @package Hopex\VkSdk\Exceptions\Api\Community
 */
class CommunitiesCatalogDisabledException extends ApiException
{
    /**
     * CommunitiesCatalogDisabledException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(1310, __('vk-sdk.0027'), $error);
	}
}
