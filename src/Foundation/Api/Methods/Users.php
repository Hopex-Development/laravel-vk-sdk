<?php

namespace Hopex\VkSdk\Foundation\Api\Methods;

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
 * @package Hopex\VkSdk\Foundation\Api\Methods
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
     * @param UsersGetFollowersRequestBuilder $builder
     *
     * @throws AccessTokenNotFoundException
     * @throws ApiException
     * @throws HttpStatusCodeException
     * @throws Throwable
     *
     * @return UsersGetFollowersResponse
     */
    public function getFollowers(UsersGetFollowersRequestBuilder $builder): UsersGetFollowersResponse
    {
        return new UsersGetFollowersResponse($builder->execute());
    }

    public function getSubscriptions()
    {
    }

    public function report()
    {
    }

    public function search()
    {
    }
}
