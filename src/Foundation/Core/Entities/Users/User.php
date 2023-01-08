<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Users;

use Hopex\VkSdk\Exceptions\Api\ApiException;
use Hopex\VkSdk\Foundation\Core\Api\Request;
use Illuminate\Support\Collection;
use Throwable;

/**
 * Class User
 * @package Hopex\VkSdk\Foundation\Core\Entities\Owner
 * @see https://dev.vk.com/method/users
 */
class User extends Request
{
    /** @var string */
    private const SCOPE = 'users.';

    /**
     * @param UserRequestFields $requestFields
     * @return Collection
     * @throws ApiException
     * @throws Throwable
     * @see https://dev.vk.com/method/users.get
     */
    public function get(UserRequestFields $requestFields): Collection
    {
        return $this->call(self::SCOPE . 'get', get_object_vars($requestFields));
    }

    /**
     * @param UserRequestFields $requestFields
     * @return Collection
     * @throws ApiException
     * @throws Throwable
     * @see https://dev.vk.com/method/users.getFollowers
     */
    public function getFollowers(UserRequestFields $requestFields): Collection
    {
        return $this->call(self::SCOPE . 'getFollowers', get_object_vars($requestFields));
    }

    /**
     * @param UserRequestFields $requestFields
     * @return Collection
     * @throws ApiException
     * @throws Throwable
     * @see https://dev.vk.com/method/users.getSubscriptions
     */
    public function getSubscriptions(UserRequestFields $requestFields): Collection
    {
        return $this->call(self::SCOPE . 'getSubscriptions', get_object_vars($requestFields));
    }

    /**
     * @param UserRequestFields $requestFields
     * @return Collection
     * @throws ApiException
     * @throws Throwable
     */
    public function report(UserRequestFields $requestFields): Collection
    {
        return $this->call(self::SCOPE . 'report', get_object_vars($requestFields));
    }

    public function search()
    {
        // TODO: добавить реализацию
    }
}
