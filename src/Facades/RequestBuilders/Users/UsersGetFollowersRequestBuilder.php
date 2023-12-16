<?php

namespace Hopex\VkSdk\Facades\RequestBuilders\Users;

use Hopex\VkSdk\Foundation\Api\RequestBuilders\RequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersGetFollowersRequestBuilder as BaseUsersGetFollowersRequestBuilder;
use Illuminate\Support\Facades\Facade;

/**
 * See description for {@see BaseUsersGetFollowersRequestBuilder}.
 *
 * @package Hopex\VkSdk\Facades\RequestBuilders\Users
 *
 * @see     RequestBuilder::query()
 *
 * @method static BaseUsersGetFollowersRequestBuilder query(int $id = null) Read more in "See also".
 */
class UsersGetFollowersRequestBuilder extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return BaseUsersGetFollowersRequestBuilder::class;
    }
}
