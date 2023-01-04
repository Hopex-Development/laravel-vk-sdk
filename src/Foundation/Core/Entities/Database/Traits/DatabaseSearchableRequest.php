<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Database\Traits;

/**
 * Trait DatabaseSearchableRequest
 * @package Hopex\VkSdk\Foundation\Core\Entities\Database\Traits
 */
trait DatabaseSearchableRequest
{
    /**
     * @var string|null
     */
    public ?string $q = null;

    /**
     * @param string $q
     * @return DatabaseSearchableRequest
     */
    public function setQ(string $q): static
    {
        $this->q = $q;
        return $this;
    }
}
