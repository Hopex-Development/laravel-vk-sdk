<?php

namespace Hopex\VkSdk\Foundation\Api\Entities\Advanced;

use Hopex\VkSdk\Foundation\Api\Entities\AbstractEntity;

/**
 * Information about the current type of user activity.
 *
 * @package Hopex\VkSdk\Foundation\Api\Entities\Advanced
 *
 * @link    https://dev.vk.com/en/reference/objects/user#occupation
 *
 * @property-read string $type
 * @property-read string $name
 * @property-read int    $id
 */
class Occupation extends AbstractEntity
{
    /**
     * ID of the school, university, community of the company (in which the user works).
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#occupation
     *
     * @return int
     */
    public function id(): int
    {
        return $this->id ?? 0;
    }

    /**
     * The name of the school, university or place of work.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#occupation
     *
     * @return string
     */
    public function name(): string
    {
        return $this->name ?? '';
    }

    /**
     * Is a type.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#occupation
     *
     * @return string
     */
    public function type(): string
    {
        return $this->type ?? '';
    }
}
