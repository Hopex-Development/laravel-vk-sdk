<?php

namespace Hopex\VkSdk\Exceptions\Api\Parameters;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 */
class ParamDocIdException extends ApiException
{

	/**
	 * VKApiParamDocIdException constructor.
	 *
	 * @param ApiError $error
	 */
	public function __construct(ApiError $error)
    {
		parent::__construct(1150, __('vk-sdk.0043'), $error);
	}
}
