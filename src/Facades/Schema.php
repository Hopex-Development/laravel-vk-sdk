<?php

namespace Hopex\VkSdk\Facades;

use Hopex\VkSdk\Foundation\Core\Storage\Schema as BaseSchema;
use Illuminate\Support\Facades\Facade;

/**
 * See description for {@see BaseSchema}.
 *
 * @package Hopex\VkSdk\Facades
 *
 * @method static string get(string $key)
 */
class Schema extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return BaseSchema::class;
    }
}
