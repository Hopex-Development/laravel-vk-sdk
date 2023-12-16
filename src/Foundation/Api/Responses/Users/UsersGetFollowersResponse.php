<?php

namespace Hopex\VkSdk\Foundation\Api\Responses\Users;

use Hopex\VkSdk\Foundation\Api\Responses\Response;
use Hopex\VkSdk\Foundation\Api\Responses\Users\Traits\HasUsers;

/**
 * Returns a list of user IDs that are subscribers of the user.
 *
 * @package Hopex\VkSdk\Foundation\Api\Responses\Users
 *
 * @link    https://dev.vk.com/en/method/users.getFollowers
 */
class UsersGetFollowersResponse extends Response
{
    use HasUsers;
}
