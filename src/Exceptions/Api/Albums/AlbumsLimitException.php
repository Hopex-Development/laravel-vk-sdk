<?php

namespace Hopex\VkSdk\Exceptions\Api\Albums;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class AlbumsLimitException
 * @package Hopex\VkSdk\Exceptions\Api\Albums
 */
class AlbumsLimitException extends ApiException
{

    /**
     * AlbumsLimitException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(302, __('vk-sdk.0014'), $error);
	}
}
