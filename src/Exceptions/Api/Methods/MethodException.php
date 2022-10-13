<?php

namespace Hopex\VkSdk\Exceptions\Api\Methods;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class MethodException
 * @package Hopex\VkSdk\Exceptions\Api\Methods
 */
class MethodException extends ApiException
{
    /**
     * MethodException constructor.
     * @param ApiError $error
     */
    public function __construct(ApiError $error)
    {
        parent::__construct(3, __('vk-sdk.0037'), $error);
    }
}
