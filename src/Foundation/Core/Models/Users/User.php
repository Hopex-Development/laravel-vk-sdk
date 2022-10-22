<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Users;

use Hopex\VkSdk\Exceptions\Api\ApiException;
use Hopex\VkSdk\Foundation\Core\Api\Request;
use Illuminate\Support\Collection;
use Throwable;

/**
 * Class User
 * @package Hopex\VkSdk\Foundation\Core\Models\Owner
 * @see https://dev.vk.com/method/users
 */
class User extends Request
{
    /** @var string  */
    private const SCOPE = 'users.';

    /**
     * @param UserRequestFields $requestFields
     * @return Collection
     * @throws ApiException
     * @throws Throwable
     */
    public function get(UserRequestFields $requestFields): Collection
    {
        return $this->call(self::SCOPE . 'get', get_object_vars($requestFields));
    }

    public function getFollowers()
    {

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
