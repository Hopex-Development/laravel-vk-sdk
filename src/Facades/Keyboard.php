<?php

namespace Hopex\VkSdk\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Keyboard
 * @package Hopex\VkSdk\Facades
 */
class Keyboard extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return \Hopex\VkSdk\Foundation\Core\Sources\Keyboard::class;
    }
}
