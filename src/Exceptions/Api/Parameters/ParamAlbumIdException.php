<?php

namespace Hopex\VkSdk\Exceptions\Api\Parameters;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class ParamAlbumIdException
 * @package Hopex\VkSdk\Exceptions\Api\Parameters
 */
class ParamAlbumIdException extends ApiException
{
    /**
     * ParamAlbumIdException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(114, __('vk-sdk.0039'), $error);
	}
}
