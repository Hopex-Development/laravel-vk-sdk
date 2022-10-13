<?php

namespace Hopex\VkSdk\Exceptions\Api\Albums;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class AlbumFullException
 * @package Hopex\VkSdk\Exceptions\Api\Albums
 */
class AlbumFullException extends ApiException
{
    /**
     * AlbumFullException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(300, __('vk-sdk.0013'), $error);
	}
}
