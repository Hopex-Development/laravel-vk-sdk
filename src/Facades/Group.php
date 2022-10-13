<?php

namespace Hopex\VkSdk\Facades;

use Hopex\VkSdk\Foundation\Core\GroupInstance;
use Illuminate\Support\Facades\Facade;

class Group extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return GroupInstance::class;
    }
}
