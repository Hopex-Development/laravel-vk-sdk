<?php

namespace Hopex\VkSdk\Facades\SimpleRequestBuilders;

use Illuminate\Support\Facades\Facade;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Advanced\UsersNameCases as _UsersNameCases;

/**
 * UsersNameCases.
 *
 * @package Hopex\VkSdk\Facades\SimpleRequestBuilders
 *
 * @method static _UsersNameCases query()
 */
class UsersNameCases extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return _UsersNameCases::class;
    }
}
