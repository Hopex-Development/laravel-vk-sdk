<?php

namespace Hopex\VkSdk\Foundation\Api\Responses\Users\Traits;

use Hopex\VkSdk\Foundation\Api\Entities\Basic\User;
use Illuminate\Support\Collection;

/**
 * HasUsers.
 *
 * @package Hopex\VkSdk\Foundation\Api\Responses\Users\Traits
 */
trait HasUsers
{
    /**
     * Received users.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return Collection|User|false
     */
    public function users(): Collection|User|false
    {
        $items = data_get($this->response, 'items', []);
        $userCreate = fn(mixed $fields) => new User(is_array($fields) ? $fields : ['id' => $fields]);

        if (count($items) > 1) {
            return collect(
                array_map(fn(array $response) => $userCreate($response), $items)
            );
        } elseif (count($items) == 1) {
            return $userCreate($items[0]);
        } else {
            return false;
        }
    }
}
