<?php

namespace Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Traits;

use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Advanced\UsersFields;

/**
 * The functionality of adding a field `userId` to the request.
 *
 * @package Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Traits
 */
trait HasUserId
{
    /**
     * {@inheritdoc}
     */
    abstract public function addField(string|array $fields);

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
