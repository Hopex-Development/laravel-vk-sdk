<?php

namespace Hopex\VkSdk\Facades\RequestBuilders\Users;

use Hopex\VkSdk\Foundation\Api\RequestBuilders\RequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersGetRequestBuilder as _UsersGetRequestBuilder;
use Illuminate\Support\Facades\Facade;

/**
 * Users get request builder.
 *
 * @package Hopex\VkSdk\Facades\RequestBuilders\Users
 *
 * @method static _UsersGetRequestBuilder query(int $id = null) Read more in "See also".
 *
 * @see     RequestBuilder::query()
 */
class UsersGetRequestBuilder extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return _UsersGetRequestBuilder::class;
    }
}
