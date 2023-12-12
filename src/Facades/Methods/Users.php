<?php

namespace Hopex\VkSdk\Facades\Methods;

use Illuminate\Support\Facades\Facade;
use Hopex\VkSdk\Foundation\Api\Methods\Users as _Users;
use Hopex\VkSdk\Exceptions\Api\AccessTokenNotFoundException;
use Hopex\VkSdk\Exceptions\Api\ApiException;
use Hopex\VkSdk\Exceptions\Api\HttpStatusCodeException;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersGetFollowersRequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersGetRequestBuilder;
use Hopex\VkSdk\Facades\RequestBuilders\UsersGetRequestBuilder as _UsersGetRequestBuilder;
use Hopex\VkSdk\Foundation\Api\Responses\Users\UsersGetFollowersResponse;
use Hopex\VkSdk\Foundation\Api\Responses\Users\UsersGetResponse;
use Throwable;

/**
 * Users.
 *
 * @package Hopex\VkSdk\Facades\Methods
 *
 * @method static get(_UsersGetRequestBuilder|UsersGetRequestBuilder $builder)
 * @method static getFollowers(UsersGetFollowersRequestBuilder $builder)
 * @method static getSubscriptions()
 * @method static report()
 * @method static search()
 */
class Users extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return _Users::class;
    }
}
