<?php

namespace Hopex\VkSdk\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class RequestFields
 * @package Hopex\VkSdk\Facades
 */
class RequestFields extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return \Hopex\VkSdk\Foundation\Core\Entities\RequestFields::class;
    }
}
