<?php

namespace Hopex\VkSdk\Facades\RequestBuilders\Users;

use Hopex\VkSdk\Foundation\Api\RequestBuilders\AbstractRequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersGetRequestBuilder as BaseUsersGetRequestBuilder;
use Illuminate\Support\Facades\Facade;

/**
 * See description for {@see BaseUsersGetRequestBuilder}.
 *
 * @package Hopex\VkSdk\Facades\RequestBuilders\Users
 *
 * @see     AbstractRequestBuilder::query()
 *
 * @method static BaseUsersGetRequestBuilder query(int $id = null) Read more in "See also".
 */
class UsersGetRequestBuilder extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return BaseUsersGetRequestBuilder::class;
    }
}
