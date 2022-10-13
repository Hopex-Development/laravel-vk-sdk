<?php

namespace Hopex\VkSdk\Exceptions\Api\Parameters;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class ParamDocTitleException
 * @package Hopex\VkSdk\Exceptions\Api\Parameters
 */
class ParamDocTitleException extends ApiException
{
    /**
     * ParamDocTitleException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(1152, __('vk-sdk.0044'), $error);
	}
}
