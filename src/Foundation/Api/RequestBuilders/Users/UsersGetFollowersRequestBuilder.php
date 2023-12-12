<?php

namespace Hopex\VkSdk\Foundation\Api\RequestBuilders\Users;

use Hopex\VkSdk\Foundation\Api\RequestBuilders\RequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Traits\HasUsersFields;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Traits\HasUsersNameCase;

/**
 * Returns a list of user IDs that are subscribers of the user.
 *
 * @package Hopex\VkSdk\Foundation\Api\RequestBuilders\Users
 *
 * @link    https://dev.vk.com/en/method/users.getFollowers
 */
class UsersGetFollowersRequestBuilder extends RequestBuilder
{
    use HasUsersFields;
    use HasUsersNameCase;

    protected string $method = 'users.getFollowers';

    /**
     * User ID.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.getFollowers
     *
     * @param int|string $id
     *
     * @return static
     */
    public function userId(int|string $id): static
    {
        return $this->addField([
            __FUNCTION__ => $id,
        ]);
    }

    /**
     * The offset required to select a specific subset of subscribers.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.getFollowers
     *
     * @param int $offset
     *
     * @return static
     */
    public function offset(int $offset): static
    {
        return $this->addField([
            __FUNCTION__ => $offset,
        ]);
    }

    /**
     * The number of subscribers you need to know about.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.getFollowers
     *
     * @param int $count
     *
     * @return static
     */
    public function count(int $count): static
    {
        return $this->addField([
            __FUNCTION__ => $count,
        ]);
    }
}
