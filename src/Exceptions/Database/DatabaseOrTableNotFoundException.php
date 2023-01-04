<?php

namespace Hopex\VkSdk\Exceptions\Database;

use Hopex\VkSdk\Exceptions\SdkException;
use Throwable;

/**
 * Class DatabaseOrTableNotFoundException
 * @package Hopex\VkSdk\Exceptions\Database
 */
class DatabaseOrTableNotFoundException extends SdkException
{
    protected $message = 'Database or table not found';
}
