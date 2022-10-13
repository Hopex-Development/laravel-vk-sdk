<?php

namespace Hopex\VkSdk\Facades;

use Illuminate\Support\Facades\Facade;

class Configure extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return \Hopex\VkSdk\Foundation\Configure::class;
    }
}
