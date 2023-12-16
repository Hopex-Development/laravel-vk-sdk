<?php

namespace Hopex\VkSdk\Facades\RequestBuilders\Users;

use Hopex\VkSdk\Foundation\Api\RequestBuilders\RequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersSearchRequestBuilder as BaseUsersSearchRequestBuilder;
use Illuminate\Support\Facades\Facade;

/**
 * See description for {@see BaseUsersSearchRequestBuilder}.
 *
 * @package Hopex\VkSdk\Facades\RequestBuilders\Users
 *
 * @see     RequestBuilder::query()
 *
 * @method static BaseUsersSearchRequestBuilder query(int $id = null) Read more in "See also".
 */
class UsersSearchRequestBuilder extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return BaseUsersSearchRequestBuilder::class;
    }
}
