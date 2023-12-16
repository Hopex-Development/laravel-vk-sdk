<?php

namespace Hopex\VkSdk\Exceptions\Api;

/**
 * Http status code exception.
 *
 * @package Hopex\VkSdk\Exceptions\Api
 */
class HttpStatusCodeException extends ApiException
{
    /**
     * @inheritdoc
     */
    public $message = 'Invalid http status code';
}
