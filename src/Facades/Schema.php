<?php

namespace Hopex\VkSdk\Facades;

use Illuminate\Support\Facades\Facade;
use Hopex\VkSdk\Foundation\Core\Storage\Schema as _Schema;

/**
 * Schema.
 *
 * @package Hopex\VkSdk\Facades
 *
 * @method static string get(string $key)
 */
class Schema extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return _Schema::class;
    }
}
