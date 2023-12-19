<?php

namespace Hopex\VkSdk\Facades\Methods;

use Hopex\VkSdk\Facades\RequestBuilders\Users\UsersGetRequestBuilder as BaseUsersGetRequestBuilder;
use Hopex\VkSdk\Facades\RequestBuilders\Users\UsersGetFollowersRequestBuilder as BaseUsersGetFollowersRequestBuilder;
use Hopex\VkSdk\Facades\RequestBuilders\Users\UsersGetSubscriptionsRequestBuilder as BaseUsersGetSubscriptionsRequestBuilder;
use Hopex\VkSdk\Facades\RequestBuilders\Users\UsersReportRequestBuilder as BaseUsersReportRequestBuilder;
use Hopex\VkSdk\Facades\RequestBuilders\Users\UsersSearchRequestBuilder as BaseUsersSearchRequestBuilder;
use Hopex\VkSdk\Foundation\Api\Methods\Users as BaseUsers;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersGetFollowersRequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersGetRequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersGetSubscriptionsRequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersReportRequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersSearchRequestBuilder;
use Illuminate\Support\Facades\Facade;

/**
 * See description for {@see BaseUsers}.
 *
 * @package Hopex\VkSdk\Facades\Methods
 *
 * @method static get(BaseUsersGetRequestBuilder|UsersGetRequestBuilder $builder)
 * @method static getFollowers(BaseUsersGetFollowersRequestBuilder|UsersGetFollowersRequestBuilder $builder)
 * @method static getSubscriptions(BaseUsersGetSubscriptionsRequestBuilder|UsersGetSubscriptionsRequestBuilder $builder)
 * @method static report(BaseUsersReportRequestBuilder|UsersReportRequestBuilder $builder)
 * @method static search(BaseUsersSearchRequestBuilder|UsersSearchRequestBuilder $builder)
 */
class Users extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return BaseUsers::class;
    }
}
