<?php

namespace Hopex\VkSdk\Facades\RequestBuilders\Users;

use Hopex\VkSdk\Foundation\Api\RequestBuilders\RequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersGetSubscriptionsRequestBuilder as _UsersGetSubscriptionsRequestBuilder;
use Illuminate\Support\Facades\Facade;

/**
 * Users get subscriptions request builder.
 *
 * @package Hopex\VkSdk\Facades\RequestBuilders\Users
 *
 * @method static _UsersGetSubscriptionsRequestBuilder query(int $id = null) Read more in "See also".
 *
 * @see     RequestBuilder::query()
 */
class UsersGetSubscriptionsRequestBuilder extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return _UsersGetSubscriptionsRequestBuilder::class;
    }
}
