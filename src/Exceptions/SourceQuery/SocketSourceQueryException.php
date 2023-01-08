<?php

namespace Hopex\VkSdk\Exceptions\SourceQuery;

use Hopex\VkSdk\Exceptions\SdkException;

/**
 * Class SocketSourceQueryException
 * @package Hopex\VkSdk\Exceptions\SourceQuery
 */
class SocketSourceQueryException extends SdkException
{
    public $message = 'Failure socket connection';
}
