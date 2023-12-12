<?php

namespace Hopex\VkSdk\Facades;

use Hopex\VkSdk\Foundation\Api\Methods\Users;
use Illuminate\Support\Facades\Facade;
use Hopex\VkSdk\Foundation\Api\VkApi as _VkApi;

/**
 * VkApi.
 *
 * @method static Users users()
 *
 * @package Hopex\VkSdk\Facades
 */
class VkApi extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return _VkApi::class;
    }
}
