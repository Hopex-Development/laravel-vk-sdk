<?php

namespace Hopex\VkSdk\Foundation\Api\RequestBuilders\Users;

use Hopex\VkSdk\Foundation\Api\RequestBuilders\RequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Traits\HasBounds;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Traits\HasUserId;
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
    use HasUserId;
    use HasUsersFields;
    use HasUsersNameCase;
    use HasBounds;

    /**
     * @inheritdoc
     */
    protected string $method = 'users.getFollowers';
}
