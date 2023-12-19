<?php

namespace Hopex\VkSdk\Foundation\Api\Methods;

use Hopex\VkSdk\Exceptions\Api\AccessTokenNotFoundException;
use Hopex\VkSdk\Exceptions\Api\ApiException;
use Hopex\VkSdk\Exceptions\Api\HttpStatusCodeException;
use Hopex\VkSdk\Facades\RequestBuilders\Users\UsersGetFollowersRequestBuilder as UsersGetFollowersRequestBuilderFacade;
use Hopex\VkSdk\Facades\RequestBuilders\Users\UsersGetRequestBuilder as UsersGetRequestBuilderFacade;
use Hopex\VkSdk\Facades\RequestBuilders\Users\UsersGetSubscriptionsRequestBuilder as UsersGetSubscriptionsRequestBuilderFacade;
use Hopex\VkSdk\Facades\RequestBuilders\Users\UsersReportRequestBuilder as UsersReportRequestBuilderFacade;
use Hopex\VkSdk\Facades\RequestBuilders\Users\UsersSearchRequestBuilder as UsersSearchRequestBuilderFacade;
use Hopex\VkSdk\Foundation\Api\Entities\Basic\User;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersGetFollowersRequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersGetRequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersGetSubscriptionsRequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersReportRequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\UsersSearchRequestBuilder;
use Hopex\VkSdk\Foundation\Api\Responses\Users\UsersGetFollowersResponse;
use Hopex\VkSdk\Foundation\Api\Responses\Users\UsersGetResponse;
use Hopex\VkSdk\Foundation\Api\Responses\Users\UsersGetSubscriptionsResponse;
use Hopex\VkSdk\Foundation\Api\Responses\Users\UsersReportResponse;
use Hopex\VkSdk\Foundation\Api\Responses\Users\UsersSearchResponse;
use Throwable;

/**
 * See description for {@see User}.
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
     * @param UsersGetRequestBuilderFacade|UsersGetRequestBuilder $builder
     *
     * @throws AccessTokenNotFoundException
     * @throws ApiException
     * @throws HttpStatusCodeException
     * @throws Throwable
     *
     * @return UsersGetResponse
     */
    public function get(
        UsersGetRequestBuilderFacade|UsersGetRequestBuilder $builder
    ): UsersGetResponse {
        return new UsersGetResponse($builder->execute());
    }

    /**
     * Returns a list of user IDs that are subscribers of the user.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.getFollowers
     *
     * @param UsersGetFollowersRequestBuilderFacade|UsersGetFollowersRequestBuilder $builder
     *
     * @throws AccessTokenNotFoundException
     * @throws ApiException
     * @throws HttpStatusCodeException
     * @throws Throwable
     *
     * @return UsersGetFollowersResponse
     */
    public function getFollowers(
        UsersGetFollowersRequestBuilderFacade|UsersGetFollowersRequestBuilder $builder
    ): UsersGetFollowersResponse {
        return new UsersGetFollowersResponse($builder->execute());
    }

    /**
     * Returns a list of IDs of users and communities followed by the user.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.getSubscriptions
     *
     * @param UsersGetSubscriptionsRequestBuilderFacade|UsersGetSubscriptionsRequestBuilder $builder
     *
     * @throws AccessTokenNotFoundException
     * @throws ApiException
     * @throws HttpStatusCodeException
     * @throws Throwable
     *
     * @return UsersGetSubscriptionsResponse
     */
    public function getSubscriptions(
        UsersGetSubscriptionsRequestBuilderFacade|UsersGetSubscriptionsRequestBuilder $builder
    ): UsersGetSubscriptionsResponse {
        return new UsersGetSubscriptionsResponse($builder->execute());
    }

    /**
     * Reports (submits a complaint about) a user.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.report
     *
     * @param UsersReportRequestBuilderFacade|UsersReportRequestBuilder $builder
     *
     * @throws AccessTokenNotFoundException
     * @throws ApiException
     * @throws HttpStatusCodeException
     * @throws Throwable
     *
     * @return UsersReportResponse
     */
    public function report(
        UsersReportRequestBuilderFacade|UsersReportRequestBuilder $builder
    ): UsersReportResponse {
        return new UsersReportResponse($builder->execute());
    }

    /**
     * Allows to search for users.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.search
     *
     * @param UsersSearchRequestBuilderFacade|UsersSearchRequestBuilder $builder
     *
     * @throws AccessTokenNotFoundException
     * @throws ApiException
     * @throws HttpStatusCodeException
     * @throws Throwable
     *
     * @return UsersSearchResponse
     */
    public function search(
        UsersSearchRequestBuilderFacade|UsersSearchRequestBuilder $builder
    ): UsersSearchResponse {
        return new UsersSearchResponse($builder->execute());
    }
}
