<?php

namespace Hopex\VkSdk\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Format
 * @package Hopex\VkSdk\Facades
 */
class Format extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return \Hopex\VkSdk\Foundation\Format::class;
    }
}
