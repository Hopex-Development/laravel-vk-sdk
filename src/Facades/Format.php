<?php

namespace Hopex\VkSdk\Facades;

use Hopex\VkSdk\Foundation\Formatters\BaseFormatter;
use Illuminate\Support\Facades\Facade;

class Format extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BaseFormatter::class;
    }
}
