<?php

namespace Hopex\VkSdk\Foundation\Api\Entities\Advanced;

use Hopex\VkSdk\Foundation\Api\Entities\AbstractEntity;

/**
 * Relative of user.
 *
 * @package Hopex\VkSdk\Foundation\Api\Entities\Advanced
 *
 * @link    https://dev.vk.com/en/reference/objects/user#relatives
 *
 * @property-read int    $id
 * @property-read string $type
 * @property-read string $name
 */
class Relative extends AbstractEntity
{
    /**
     * The user ID.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#relatives
     *
     * @return int
     */
    public function id(): int
    {
        return $this->id ?? 0;
    }

    /**
     * The name of the relative (if the relative is not a user of the VK then the previous value id will not be
     * returned).
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#relatives
     *
     * @return string
     */
    public function name(): string
    {
        return $this->name ?? '';
    }

    /**
     * Type of relationship. Possible values:
     * * `child` — Son/Daughter
     * * `sibling` — Brother/Sister
     * * `parent` — Father/Mother
     * * `grandparent` — Grandfather/Grandmother
     * * `grandchild` — Grandson/Granddaughter
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#relatives
     *
     * @return string
     */
    public function type(): string
    {
        return $this->type ?? '';
    }
}
