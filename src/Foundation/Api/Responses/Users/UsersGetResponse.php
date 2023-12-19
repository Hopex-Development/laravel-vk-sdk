<?php

namespace Hopex\VkSdk\Foundation\Api\Responses\Users;

use Hopex\VkSdk\Foundation\Api\Entities\Basic\User;
use Hopex\VkSdk\Foundation\Api\Responses\AbstractResponse;
use Hopex\VkSdk\Foundation\Api\Responses\Users\Traits\HasCount;
use Hopex\VkSdk\Foundation\Api\Responses\Users\Traits\HasUsers;
use Illuminate\Support\Collection;

/**
 * Returns enhanced user information.
 *
 * ### Linked versions
 * ---
 * {@see https://dev.vk.com/en/reference/versions Go to API versions page}
 *
 * #### 5.89
 * New required fields have been added to user object:
 * * isClosed (boolean) — is profile closed by privacy;
 * * canAccessClosed (boolean) — if current user can see user's profile when isClosed = `true`.
 *
 * #### 5.62
 * The `messages.getHistoryAttachments` method returns `messageId` field. User object has a new value of relationship
 * status (8 — "in a civil union").
 *
 * #### 5.8
 * Fields `city` and `country` in `fields` return object instead of id.
 *
 * #### 4.0
 * The `offset` and `count` could be only positive.
 *
 * @todo добавить ссылку на метод `messages.getHistoryAttachments`
 *
 * @package Hopex\VkSdk\Foundation\Api\Responses\Users
 *
 * @link    https://dev.vk.com/en/method/users.get
 */
class UsersGetResponse extends AbstractResponse
{
    /**
     * Returns users.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return Collection
     */
    public function users(): Collection
    {
        $items = $this->fields ?? [];

        if (count($items)) {
            return collect(array_map(fn(array $item) => new User($item), $items));
        } else {
            return collect();
        }
    }
}
