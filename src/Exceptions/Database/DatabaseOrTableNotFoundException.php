<?php

namespace Hopex\VkSdk\Exceptions\Database;

use Hopex\VkSdk\Exceptions\SdkException;

/**
 * Class DatabaseOrTableNotFoundException
 * @package Hopex\VkSdk\Exceptions\Database
 */
class DatabaseOrTableNotFoundException extends SdkException
{
    protected $message = 'Database or table not found';
}
