<?php

namespace Hopex\VkSdk\Foundation\Api\Responses\Users;

use Hopex\VkSdk\Foundation\Api\Responses\AbstractResponse;
use Hopex\VkSdk\Foundation\Api\Responses\Users\Traits\HasCount;
use Hopex\VkSdk\Foundation\Api\Responses\Users\Traits\HasUsers;

/**
 * Returns a list of users according to a given search criterion.
 * <br><br>
 *
 * After successful execution, it returns an object containing the number of results in the field `count` and array
 * objects that describe users in `items` field.
 *
 * @package Hopex\VkSdk\Foundation\Api\Responses\Users
 *
 * @link    https://dev.vk.com/en/method/users.search
 */
class UsersSearchResponse extends AbstractResponse
{
    use HasCount;
    use HasUsers;
}
