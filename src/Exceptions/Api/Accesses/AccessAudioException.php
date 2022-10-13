<?php

namespace Hopex\VkSdk\Exceptions\Api\Accesses;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class AccessAudioException
 * @package Hopex\VkSdk\Exceptions\Api\Accesses
 */
class AccessAudioException extends ApiException
{
    /**
     * AccessAudioException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(201, __('vk-sdk.0001'), $error);
	}
}
