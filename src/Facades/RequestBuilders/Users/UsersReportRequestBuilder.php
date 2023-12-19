<?php

namespace Hopex\VkSdk\Facades\RequestBuilders\Users;

use Hopex\VkSdk\Foundation\Api\RequestBuilders\AbstractRequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersReportRequestBuilder as BaseUsersReportRequestBuilder;
use Illuminate\Support\Facades\Facade;

/**
 * See description for {@see BaseUsersReportRequestBuilder}.
 *
 * @package Hopex\VkSdk\Facades\RequestBuilders\Users
 *
 * @see     AbstractRequestBuilder::query()
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
