<?php

namespace Hopex\VkSdk\Exceptions\Server;

use Hopex\VkSdk\Exceptions\SdkException;

/**
 * Class UnknownServerException
 * @package Hopex\VkSdk\Exceptions\Server
 */
class UnknownServerException extends SdkException
{
    public $message = 'Unknown server';
}
