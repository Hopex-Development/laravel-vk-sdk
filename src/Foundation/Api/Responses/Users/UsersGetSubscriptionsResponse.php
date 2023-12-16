<?php

namespace Hopex\VkSdk\Foundation\Api\Responses\Users;

use Hopex\VkSdk\Foundation\Api\Entities\Basic\User;
use Hopex\VkSdk\Foundation\Api\Responses\Response;
use Illuminate\Support\Collection;

/**
 * After successful execution, return objects `users` and `groups` each of which contains a field. count The number of
 * results and `items` - a list of user IDs or public pages to which the current user is subscribed (from the section
 * "Interesting pages").
 * <br><br>
 *
 * If a parameter was given `extended` returns a combined array of objects `group` and `user` in the field `items` as
 * well as the total number of results in the field `count`.
 *
 * ### Linked versions
 * ---
 * {@see https://dev.vk.com/en/reference/versions Go to API versions page}
 *
 * #### 5.54
 * The `finishDate` field in a `community object` will not return if the finish date is not set.
 *
 * #### 5.53
 * The `canMessage`, `banInfo`, `canPost`, `canUploadDoc`, `canUploadVideo`, `canSeeAllPosts`,
 * `canCreateTopic`,
 * `isFavorite`, `isHiddenFromFeed` fields in a community object are returned for the requests including access token
 * only.
 *
 * @package Hopex\VkSdk\Foundation\Api\Responses\Users
 *
 * @link    https://dev.vk.com/en/method/users.getSubscriptions
 *
 * @property-read  array $groups
 * @property-read  array $users
 */
class UsersGetSubscriptionsResponse extends Response
{
    /**
     * The number of results - a list of user IDs to which the current user is subscribed
     * (from the section "Interesting pages").
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.getSubscriptions
     *
     * @return int
     */
    public function usersCount(): int
    {
        return data_get($this->users, 'count', 0);
    }

    /**
     * List of user to which the current user is subscribed. All fields except ID will be available only if
     * extended is specified in the request.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.getSubscriptions
     *
     * @return User[]|Collection
     */
    public function users(): Collection|array
    {
        $rootItems = data_get($this->response, 'items', []);
        $entityItems = data_get($this->users, 'items', []);

        if (compare($rootItems, $entityItems, [])) {
            return collect();
        } elseif (!empty($rootItems)) {
            return collect(
                array_map(function (int $id) {
                    return new User([
                        'id' => $id,
                    ]);
                }, $rootItems)
            );
        } else {
            return collect(
                array_map(function (array $fields) {
                    return new User($fields);
                },
                    array_filter($entityItems, function ($entity) {
                        return compare($entity['type'], 'profile');
                    }))
            );
        }
    }

    /**
     * The number of results - a list of public pages to which the current user is subscribed
     * (from the section "Interesting pages").
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.getSubscriptions
     *
     * @return int
     */
    public function groupsCount(): int
    {
        return data_get($this->groups, 'count', 0);
    }

    /**
     * List of public pages to which the current user is subscribed. All fields except ID will be available only if
     * extended is specified in the request.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/users.getSubscriptions
     *
     * @todo    добавить сущность в массив
     *
     * @return Group[]|Collection
     */
    public function groups(): Collection|array
    {
        $rootItems = data_get($this->response, 'items', []);
        $entityItems = data_get($this->groups, 'items', []);

        if (compare($rootItems, $entityItems, [])) {
            return collect();
        } elseif (!empty($rootItems)) {
            return collect(
                array_map(function (int $id) {
                    return new Group([
                        'id' => $id,
                    ]);
                }, $rootItems)
            );
        } else {
            return collect(
                array_map(function (array $fields) {
                    return new Group($fields);
                },
                    array_filter($entityItems, function ($entity) {
                        return compare($entity['type'], 'page');
                    }))
            );
        }
    }
}
