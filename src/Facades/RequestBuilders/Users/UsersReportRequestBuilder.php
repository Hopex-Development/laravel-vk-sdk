<?php

namespace Hopex\VkSdk\Facades\RequestBuilders\Users;

use Hopex\VkSdk\Foundation\Api\RequestBuilders\RequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersReportRequestBuilder as _UsersReportRequestBuilder;
use Illuminate\Support\Facades\Facade;

/**
 * Users report request builder.
 *
 * @package Hopex\VkSdk\Facades\RequestBuilders\Users
 *
 * @method static _UsersReportRequestBuilder query(int $id = null) Read more in "See also".
 *
 * @see     RequestBuilder::query()
 */
class UsersReportRequestBuilder extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return _UsersReportRequestBuilder::class;
    }
}
