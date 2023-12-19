<?php

namespace Hopex\VkSdk\Foundation\Api\Responses\Users\Traits;

/**
 * Contains a method for getting count of users from a response.
 *
 * @package Hopex\VkSdk\Foundation\Api\Responses\Users\Traits
 */
trait HasCount
{
    /**
     * Count of received object.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return int
     */
    public function count(): int
    {
        return data_get($this->fields, 'count', 0);
    }
}
