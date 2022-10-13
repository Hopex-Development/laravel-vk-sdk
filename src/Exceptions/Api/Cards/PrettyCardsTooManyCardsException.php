<?php

namespace Hopex\VkSdk\Exceptions\Api\Cards;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class PrettyCardsTooManyCardsException
 * @package Hopex\VkSdk\Exceptions\Api\Cards
 */
class PrettyCardsTooManyCardsException extends ApiException
{
    /**
     * PrettyCardsTooManyCardsException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(1901, __('vk-sdk.0026'), $error);
	}
}
