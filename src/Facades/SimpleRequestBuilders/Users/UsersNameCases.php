<?php

namespace Hopex\VkSdk\Facades\SimpleRequestBuilders\Users;

use Hopex\VkSdk\Foundation\Api\RequestBuilders\AbstractRequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Advanced\UsersNameCases as BaseUsersNameCases;
use Illuminate\Support\Facades\Facade;

/**
 * See description for {@see BaseUsersNameCases}.
 *
 * @package Hopex\VkSdk\Facades\SimpleRequestBuilders\Users
 *
 * @see     AbstractRequestBuilder::query()
 *
 * @method static BaseUsersNameCases query() Read more in "See also".
 */
class UsersNameCases extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return BaseUsersNameCases::class;
    }
}
