<?php

namespace Hopex\VkSdk\Exceptions\Api\Video;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class VideoCommentsClosedException
 * @package VK\Exceptions\Api
 */
class VideoCommentsClosedException extends ApiException
{
    /**
     * VideoCommentsClosedException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(801, __('vk-sdk.0064'), $error);
	}
}
