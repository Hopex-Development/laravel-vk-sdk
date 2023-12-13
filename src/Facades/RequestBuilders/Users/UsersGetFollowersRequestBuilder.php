<?php

namespace Hopex\VkSdk\Facades\RequestBuilders\Users;

use Hopex\VkSdk\Foundation\Api\RequestBuilders\RequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersGetFollowersRequestBuilder as _UsersGetFollowersRequestBuilder;
use Illuminate\Support\Facades\Facade;

/**
 * Users get followers request builder.
 *
 * @package Hopex\VkSdk\Facades\RequestBuilders\Users
 *
 * @method static _UsersGetFollowersRequestBuilder query(int $id = null) Read more in "See also".
 *
 * @see     RequestBuilder::query()
 */
class UsersGetFollowersRequestBuilder extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return _UsersGetFollowersRequestBuilder::class;
    }
}
