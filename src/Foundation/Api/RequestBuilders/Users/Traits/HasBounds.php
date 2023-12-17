<?php

namespace Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Traits;

/**
 * The functionality of adding a fields `offset` and `count` to the request.
 *
 * @package Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Traits
 */
trait HasBounds
{
    /**
     * @inheritDoc
     */
    abstract public function addField(string|array $fields);

    /**
     * The offset required to select a specific subset.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param int $offset
     *
     * @return static
     */
    public function offset(int $offset): static
    {
        return $this->addField([
            __FUNCTION__ => $offset,
        ]);
    }

    /**
     * The number you need to know about.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param int $count
     *
     * @return static
     */
    public function count(int $count): static
    {
        return $this->addField([
            __FUNCTION__ => $count,
        ]);
    }
}
