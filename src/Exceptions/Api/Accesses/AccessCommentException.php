<?php

namespace Hopex\VkSdk\Exceptions\Api\Accesses;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class AccessCommentException
 * @package Hopex\VkSdk\Exceptions\Api\Accesses
 */
class AccessCommentException extends ApiException
{
    /**
     * AccessCommentException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(183, __('vk-sdk.0002'), $error);
	}
}
