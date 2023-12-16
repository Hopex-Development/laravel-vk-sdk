<?php

namespace Hopex\VkSdk\Facades\RequestBuilders\Users;

use Hopex\VkSdk\Foundation\Api\RequestBuilders\RequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersReportRequestBuilder as BaseUsersReportRequestBuilder;
use Illuminate\Support\Facades\Facade;

/**
 * See description for {@see BaseUsersReportRequestBuilder}.
 *
 * @package Hopex\VkSdk\Facades\RequestBuilders\Users
 *
 * @see     RequestBuilder::query()
 *
 * @method static BaseUsersReportRequestBuilder query(int $id = null) Read more in "See also".
 */
class UsersReportRequestBuilder extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return BaseUsersReportRequestBuilder::class;
    }
}
