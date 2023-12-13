<?php

namespace Hopex\VkSdk\Facades\Methods;

use Hopex\VkSdk\Facades\RequestBuilders\Users\UsersGetRequestBuilder as _UsersGetRequestBuilder;
use Hopex\VkSdk\Foundation\Api\Methods\Users as _Users;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersGetFollowersRequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersGetRequestBuilder;
use Illuminate\Support\Facades\Facade;

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
