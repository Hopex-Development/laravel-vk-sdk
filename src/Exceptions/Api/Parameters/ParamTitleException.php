<?php

namespace Hopex\VkSdk\Exceptions\Api\Parameters;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class ParamTitleException
 * @package Hopex\VkSdk\Exceptions\Api\Parameters
 */
class ParamTitleException extends ApiException
{
    /**
     * ParamTitleException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(119, __('vk-sdk.0055'), $error);
	}
}
