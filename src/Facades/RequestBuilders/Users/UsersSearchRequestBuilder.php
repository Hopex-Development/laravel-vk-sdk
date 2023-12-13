<?php

namespace Hopex\VkSdk\Facades\RequestBuilders\Users;

use Hopex\VkSdk\Foundation\Api\RequestBuilders\RequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersSearchRequestBuilder as _UsersSearchRequestBuilder;
use Illuminate\Support\Facades\Facade;

/**
 * Users search request builder.
 *
 * @package Hopex\VkSdk\Facades\RequestBuilders\Users
 *
 * @method static _UsersSearchRequestBuilder query(int $id = null) Read more in "See also".
 *
 * @see     RequestBuilder::query()
 */
class UsersSearchRequestBuilder extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return _UsersSearchRequestBuilder::class;
    }
}
