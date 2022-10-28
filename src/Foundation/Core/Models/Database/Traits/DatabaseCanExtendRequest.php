<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Database\Traits;

/**
 * Trait DatabaseCanExtendRequest
 * @package Hopex\VkSdk\Foundation\Core\Models\Database\Traits
 */
trait DatabaseCanExtendRequest
{
    /**
     * @var string|null
     */
    public ?string $extended = null;

    /**
     * @param string $extended
     * @return DatabaseCanExtendRequest
     */
    public function setExtended(string $extended): static
    {
        $this->extended = $extended;
        return $this;
    }
}
