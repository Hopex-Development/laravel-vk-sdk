<?php

namespace Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Traits;

use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Advanced\UsersFields;

/**
 * HasUserId.
 *
 * @package Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Traits
 *
 * @method addField(array|UsersFields $array)
 */
trait HasUserId
{
    /**
     * User ID.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param int|string $id
     *
     * @return static
     */
    public function userId(int|string $id): static
    {
        return $this->addField([
            __FUNCTION__ => $id,
        ]);
    }
}
