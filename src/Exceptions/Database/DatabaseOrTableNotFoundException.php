<?php

namespace Hopex\VkSdk\Exceptions\Database;

use Hopex\VkSdk\Exceptions\Exception;

/**
 * Database or table not found exception.
 *
 * @package Hopex\VkSdk\Exceptions\Database
 */
class DatabaseOrTableNotFoundException extends Exception
{
    /**
     * {@inheritdoc}
     */
    protected $message = 'Database or table not found. Try run `php artisan migrate --force` command.';
}
