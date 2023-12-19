<?php

namespace Hopex\VkSdk\Foundation\Api\RequestBuilders\Users;

use Hopex\VkSdk\Foundation\Api\Entities\Basic\User;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\AbstractRequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Traits\HasBounds;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Traits\HasUserId;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Traits\HasUsersFields;

/**
 * After successful execution, it returns `users` and `groups` objects, each of which contains the count field — the
 * number of results and `items` — a list of user IDs or public pages to which the current user is subscribed (from the
 * "Interesting pages" section).
 * <br><br>
 *
 * If the `extended` parameter was set, it returns the combined array of `group` and {@see User} objects in the items
 * field, as well as the total number of results in the count field.
 *
 * @package Hopex\VkSdk\Foundation\Api\RequestBuilders\Users
 *
 * @link    https://dev.vk.com/en/method/users.getSubscriptions
 */
class UsersGetSubscriptionsRequestBuilder extends AbstractRequestBuilder
{
    use HasUserId;
    use HasBounds;
    use HasUsersFields;

    /**
     * {@inheritdoc}
     */
    protected string $method = 'users.getSubscriptions';

    /**
     * `true` returns a combined list containing objects group и user together. `false` returns a list of group and
     * user IDs separately (by default).
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.getSubscriptions
     *
     * @return static
     */
    public function extended(): static
    {
        return $this->addField([
            __FUNCTION__ => true,
        ]);
    }
}
