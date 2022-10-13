<?php

namespace Hopex\VkSdk\Exceptions\Api\Common;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class StatusNoAudioException
 * @package Hopex\VkSdk\Exceptions\Api\Common
 */
class StatusNoAudioException extends ApiException
{
    /**
     * StatusNoAudioException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(221, __('vk-sdk.0149'), $error);
	}
}

