<?php

namespace Hopex\VkSdk\Facades\RequestBuilders\Users;

use Hopex\VkSdk\Foundation\Api\RequestBuilders\AbstractRequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersGetSubscriptionsRequestBuilder as BaseUsersGetSubscriptionsRequestBuilder;
use Illuminate\Support\Facades\Facade;

/**
 * See description for {@see BaseUsersGetSubscriptionsRequestBuilder}.
 *
 * @package Hopex\VkSdk\Facades\RequestBuilders\Users
 *
 * @see     AbstractRequestBuilder::query()
 *
 * @method static BaseUsersGetSubscriptionsRequestBuilder query(int $id = null) Read more in "See also".
 */
class UsersGetSubscriptionsRequestBuilder extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return BaseUsersGetSubscriptionsRequestBuilder::class;
    }
}
