<?php

namespace Hopex\VkSdk\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class SdkConfig
 * @package Hopex\VkSdk\Facades
 */
class SdkConfig extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return \Hopex\VkSdk\Foundation\SdkConfig::class;
    }
}
