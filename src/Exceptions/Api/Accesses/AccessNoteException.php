<?php

namespace Hopex\VkSdk\Exceptions\Api\Accesses;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class AccessNoteException
 * @package Hopex\VkSdk\Exceptions\Api\Accesses
 */
class AccessNoteException extends ApiException
{
    /**
     * AccessNoteException constructor.
     * @param ApiError $error
     */
	public function __construct(ApiError $error)
    {
		parent::__construct(181, __('vk-sdk.0007'), $error);
	}
}
