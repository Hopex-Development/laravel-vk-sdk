<?php

namespace Hopex\VkSdk\Foundation\Api\Methods;

use Hopex\VkSdk\Exceptions\Api\AccessTokenNotFoundException;
use Hopex\VkSdk\Exceptions\Api\ApiException;
use Hopex\VkSdk\Exceptions\Api\HttpStatusCodeException;
use Hopex\VkSdk\Facades\RequestBuilders\Users\UsersGetFollowersRequestBuilder as _UsersGetFollowersRequestBuilder;
use Hopex\VkSdk\Facades\RequestBuilders\Users\UsersGetRequestBuilder as _UsersGetRequestBuilder;
use Hopex\VkSdk\Facades\RequestBuilders\Users\UsersGetSubscriptionsRequestBuilder as _UsersGetSubscriptionsRequestBuilder;
use Hopex\VkSdk\Facades\RequestBuilders\Users\UsersReportRequestBuilder as _UsersReportRequestBuilder;
use Hopex\VkSdk\Facades\RequestBuilders\Users\UsersSearchRequestBuilder as _UsersSearchRequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersGetFollowersRequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersGetRequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersGetSubscriptionsRequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersReportRequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersSearchRequestBuilder;
use Hopex\VkSdk\Foundation\Api\Responses\Users\UsersGetFollowersResponse;
use Hopex\VkSdk\Foundation\Api\Responses\Users\UsersGetResponse;
use Throwable;

/**
 * Users.
 *
 * @package Hopex\VkSdk\Foundation\Api\Methods
 *
 * @link    https://dev.vk.com/en/method/users
 */
class Users
{
    /**
     * Users get request builder.<br>
     * Fields `counters`, `military` shall be returned only if exactly one of the `userId`.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.get
     *
     * @param _UsersGetRequestBuilder|UsersGetRequestBuilder $builder
     *
     * @throws AccessTokenNotFoundException
     * @throws ApiException
     * @throws HttpStatusCodeException
     * @throws Throwable
     * @return UsersGetResponse
     */
    public function get(_UsersGetRequestBuilder|UsersGetRequestBuilder $builder): UsersGetResponse
    {
        return new UsersGetResponse($builder->execute());
    }

    /**
     * Returns a list of user IDs that are subscribers of the user.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.getFollowers
     *
     * @param _UsersGetFollowersRequestBuilder|UsersGetFollowersRequestBuilder $builder
     *
     * @throws AccessTokenNotFoundException
     * @throws ApiException
     * @throws HttpStatusCodeException
     * @throws Throwable
     *
     * @return UsersGetFollowersResponse
     */
    public function getFollowers(_UsersGetFollowersRequestBuilder|UsersGetFollowersRequestBuilder $builder): UsersGetFollowersResponse
    {
        return new UsersGetFollowersResponse($builder->execute());
    }

    /**
     * Returns a list of IDs of users and communities followed by the user.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.getSubscriptions
     *
     * @param _UsersGetSubscriptionsRequestBuilder|UsersGetSubscriptionsRequestBuilder $builder
     *
     * @return void
     */
    public function getSubscriptions(_UsersGetSubscriptionsRequestBuilder|UsersGetSubscriptionsRequestBuilder $builder)
    {
    }

    /**
     * Reports (submits a complaint about) a user.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.report
     *
     * @param _UsersReportRequestBuilder|UsersReportRequestBuilder $builder
     *
     * @return void
     */
    public function report(_UsersReportRequestBuilder|UsersReportRequestBuilder $builder)
    {
    }

    /**
     * Allows to search for users.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param _UsersSearchRequestBuilder|UsersSearchRequestBuilder $builder
     *
     * @return void
     */
    public function search(_UsersSearchRequestBuilder|UsersSearchRequestBuilder $builder)
    {
    }
}
