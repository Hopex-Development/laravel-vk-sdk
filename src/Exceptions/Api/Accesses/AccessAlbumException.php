<?php

namespace Hopex\VkSdk\Exceptions\Api\Accesses;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class AccessAlbumException
 * @package Hopex\VkSdk\Exceptions\Api\Accesses
 */
class AccessAlbumException extends ApiException
{

    /**
     * AccessAlbumException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(200, __('vk-sdk.0001'), $error);
	}
}
