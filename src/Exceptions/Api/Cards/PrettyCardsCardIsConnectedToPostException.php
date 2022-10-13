<?php

namespace Hopex\VkSdk\Exceptions\Api\Cards;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class PrettyCardsCardIsConnectedToPostException
 * @package Hopex\VkSdk\Exceptions\Api\Cards
 */
class PrettyCardsCardIsConnectedToPostException extends ApiException
{
    /**
     * PrettyCardsCardIsConnectedToPostException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(1902, __('vk-sdk.0024'), $error);
	}
}
