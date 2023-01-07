<?php

namespace Hopex\VkSdk\Exceptions\SourceQuery;

use Hopex\VkSdk\Exceptions\SdkException;

/**
 * Class AuthenticationSourceQueryException
 * @package Hopex\VkSdk\Exceptions\SourceQuery
 */
class AuthenticationSourceQueryException extends SdkException
{
    public $message = 'Failure SourceQuery authentication';
}
