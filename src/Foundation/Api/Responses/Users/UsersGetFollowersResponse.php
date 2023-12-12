<?php

namespace Hopex\VkSdk\Foundation\Api\Responses\Users;

use Hopex\VkSdk\Foundation\Api\Entities\Basic\User;
use Hopex\VkSdk\Foundation\Api\Responses\Response;
use Illuminate\Support\Collection;

/**
 * Users get followers response.
 *
 * @package Hopex\VkSdk\Foundation\Api\Responses\Users
 */
class UsersGetFollowersResponse extends Response
{
    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return int
     */
    public function count(): int
    {
        return data_get($this->response, 'count', 0);
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return Collection|User|false
     */
    public function users(): Collection|User|false
    {
        $items = data_get($this->response, 'items', []);

        if (count($items) > 1) {
            return collect(
                array_map(fn(array $response) => new User($response), $items)
            );
        } elseif (count($items) == 1) {
            $fields = $items[0];

            return new User(is_array($fields) ? $fields : [
                'id' => $fields
            ]);
        } else {
            return false;
        }
    }
}
