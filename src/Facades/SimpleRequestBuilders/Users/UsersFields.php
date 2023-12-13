<?php

namespace Hopex\VkSdk\Facades\SimpleRequestBuilders\Users;

use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Advanced\UsersFields as _UsersFields;
use Illuminate\Support\Facades\Facade;

/**
 * Users fields.
 *
 * @package Hopex\VkSdk\Facades\SimpleRequestBuilders\Users
 *
 * @method static _UsersFields query()
 */
class UsersFields extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return _UsersFields::class;
    }
}
