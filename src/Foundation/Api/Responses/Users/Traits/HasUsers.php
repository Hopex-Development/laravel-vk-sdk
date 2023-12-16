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
     * @return Collection
     */
    public function users(): Collection
    {
        $items = data_get($this->fields, 'items', []);

        if (count($items)) {
            return collect(array_map(fn(array $item) => new User($item), $items));
        } else {
            return collect();
        }
    }
}
