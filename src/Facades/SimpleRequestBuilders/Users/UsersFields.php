<?php

namespace Hopex\VkSdk\Facades\SimpleRequestBuilders\Users;

use Hopex\VkSdk\Foundation\Api\RequestBuilders\AbstractRequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Advanced\UsersFields as BaseUsersFields;
use Illuminate\Support\Facades\Facade;

/**
 * See description for {@see BaseUsersFields}.
 *
 * @package Hopex\VkSdk\Facades\SimpleRequestBuilders\Users
 *
 * @see     AbstractRequestBuilder::query()
 *
 * @method static BaseUsersFields query() Read more in "See also".
 */
class UsersFields extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return BaseUsersFields::class;
    }
}
