<?php

namespace Hopex\VkSdk\Foundation\Api\RequestBuilders\Users;

use Hopex\VkSdk\Foundation\Api\RequestBuilders\RequestBuilder;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Traits\HasUsersFields;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Traits\HasUsersNameCase;
use Illuminate\Support\Collection;

/**
 * Users get request builder.<br>
 * Fields `counters`, `military` shall be returned only if exactly one of the `userId`.
 *
 * @package Hopex\VkSdk\Foundation\Api\RequestBuilders\Users
 *
 * @link    https://dev.vk.com/en/method/users.get
 */
class UsersGetRequestBuilder extends RequestBuilder
{
    use HasUsersFields;
    use HasUsersNameCase;

    /**
     * @inheritdoc
     */
    protected string $method = 'users.get';

    /**
     * The comma-listed user IDs or their short names (`screenName`).
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.get
     *
     * @param array|Collection $users    The comma-listed user IDs or their short names.
     * @param callable|null    $callback The custom ID extraction function.
     *
     * @return $this
     */
    public function userIds(array|Collection $users, callable $callback = null): static
    {
        $implode = fn($users) => implode(',', $users);

        if ($callback) {
            $users = $callback($users);
        } elseif (is_array($users)) {
            $users = $implode($users);
        } elseif ($users instanceof Collection) {
            $users = $implode($users->toArray());
        }

        $this->addField([
            __FUNCTION__ => $users,
        ]);

        return $this;
    }
}
