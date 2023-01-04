<?php

namespace Hopex\VkSdk\Exceptions\Api;

/**
 * Class HttpStatusCodeException
 * @package Hopex\VkSdk\Exceptions\Api
 */
class HttpStatusCodeException extends ApiException
{
    public $message = 'Invalid http status code';
}
