<?php

namespace Hopex\VkSdk\Facades\SimpleRequestBuilders\Users;

use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Advanced\UsersNameCases as _UsersNameCases;
use Illuminate\Support\Facades\Facade;

/**
 * UsersNameCases.
 *
 * @package Hopex\VkSdk\Facades\SimpleRequestBuilders\Users
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
