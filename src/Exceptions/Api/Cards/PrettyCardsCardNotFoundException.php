<?php

namespace Hopex\VkSdk\Exceptions\Api\Cards;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class PrettyCardsCardNotFoundException
 * @package Hopex\VkSdk\Exceptions\Api\Cards
 */
class PrettyCardsCardNotFoundException extends ApiException
{
    /**
     * PrettyCardsCardNotFoundException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(1900, __('vk-sdk.0025'), $error);
	}
}
