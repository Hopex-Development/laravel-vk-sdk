<?php

namespace Hopex\VkSdk\Exceptions\Server;

use Hopex\VkSdk\Exceptions\SdkException;

/**
 * Class UnknownServerEntityException
 * @package Hopex\VkSdk\Exceptions\Callback
 */
class UnknownServerEntityException extends SdkException
{
    public $message = 'Unknown server entity used';
}
