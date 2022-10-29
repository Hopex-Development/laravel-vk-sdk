<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Database\Traits;

/**
 * Trait DatabaseEnumerableRequest
 * @package Hopex\VkSdk\Foundation\Core\Models\Database\Traits
 */
trait DatabaseEnumerableRequest
{
    /**
     * @var int|null
     */
    public ?int $offset = null;

    /**
     * @var int|null
     */
    public ?int $count = null;

    /**
     * @param int $offset
     * @return DatabaseEnumerableRequest
     */
    public function setOffset(int $offset): static
    {
        $this->offset = $offset;
        return $this;
    }

    /**
     * @param int $count
     * @return DatabaseEnumerableRequest
     */
    public function setCount(int $count): static
    {
        $this->count = $count;
        return $this;
    }
}
