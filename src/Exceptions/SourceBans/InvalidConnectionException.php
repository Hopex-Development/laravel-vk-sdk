<?php

namespace Hopex\VkSdk\Exceptions\SourceBans;

use Hopex\VkSdk\Exceptions\SdkException;

/**
 * Class InvalidConnectionException
 * @package Hopex\VkSdk\Exceptions\Database
 */
class InvalidConnectionException extends SdkException
{
    protected $message = 'There is no connection information to the source bans database';
}
