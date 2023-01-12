<?php

namespace Hopex\VkSdk\Contracts;

use Illuminate\Support\Collection;

/**
 * Interface SourceBansServiceContract
 * @package Hopex\VkSdk\Contracts
 */
interface SourceBansServiceContract
{
    /**
     * @return Collection
     */
    public function getAdmins(): Collection;

    /**
     * @return Collection
     */
    public function getBans(): Collection;
}
