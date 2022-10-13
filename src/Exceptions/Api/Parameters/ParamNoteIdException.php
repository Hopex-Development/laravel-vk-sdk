<?php

namespace Hopex\VkSdk\Exceptions\Api\Parameters;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class ParamNoteIdException
 * @package Hopex\VkSdk\Exceptions\Api\Parameters
 */
class ParamNoteIdException extends ApiException
{
    /**
     * ParamNoteIdException constructor.
     * @param ApiError $error
     */
    public function __construct(ApiError $error)
    {
		parent::__construct(180, __('vk-sdk.0048'), $error);
	}
}
