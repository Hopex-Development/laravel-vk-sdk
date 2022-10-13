<?php

namespace Hopex\VkSdk\Exceptions\Api\Video;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class VideoAlreadyAddedException
 * @package VK\Exceptions\Api
 */
class VideoAlreadyAddedException extends ApiException
{
    /**
     * VideoAlreadyAddedException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(800, __('vk-sdk.0063'), $error);
	}
}
