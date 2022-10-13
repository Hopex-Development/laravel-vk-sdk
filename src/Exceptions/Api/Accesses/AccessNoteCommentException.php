<?php

namespace Hopex\VkSdk\Exceptions\Api\Accesses;

use Hopex\VkSdk\Exceptions\Api\ApiError;
use Hopex\VkSdk\Exceptions\Api\ApiException;

/**
 * Class AccessNoteCommentException
 * @package Hopex\VkSdk\Exceptions\Api\Accesses
 */
class AccessNoteCommentException extends ApiException
{
    /**
     * AccessNoteCommentException constructor.
     * @param ApiError $error
     */
    public function __construct(ApiError $error)
    {
        parent::__construct(182, __('vk-sdk.0006'), $error);
    }
}
