<?php

namespace Hopex\VkSdk\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class VkApi
 * @package Hopex\VkSdk\Facades
 */
class VkApi extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return \Hopex\VkSdk\Foundation\Core\Api\Client::class;
    }
}
