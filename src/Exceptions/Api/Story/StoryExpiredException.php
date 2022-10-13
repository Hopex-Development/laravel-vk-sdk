<?php

namespace Hopex\VkSdk\Exceptions\Api\Story;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class StoryExpiredException
 * @package VK\Exceptions\Api
 */
class StoryExpiredException extends ApiException
{
    /**
     * StoryExpiredException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(1600, __('vk-sdk.0061'), $error);
	}
}
