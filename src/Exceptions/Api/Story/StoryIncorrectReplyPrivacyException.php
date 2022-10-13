<?php

namespace Hopex\VkSdk\Exceptions\Api\Story;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class StoryIncorrectReplyPrivacyException
 * @package VK\Exceptions\Api
 */
class StoryIncorrectReplyPrivacyException extends ApiException
{
    /**
     * StoryIncorrectReplyPrivacyException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(1602, __('vk-sdk.0062'), $error);
	}
}
