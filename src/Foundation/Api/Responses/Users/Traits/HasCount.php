<?php

namespace Hopex\VkSdk\Foundation\Api\Responses\Users\Traits;

/**
 * HasCount.
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
