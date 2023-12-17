<?php

namespace Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Traits;

use Hopex\VkSdk\Facades\SimpleRequestBuilders\Users\UsersFields as _UsersFields;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Advanced\UsersFields;

/**
 * The functionality of adding a field `fields` to the request.
 *
 * @package Hopex\VkSdk\Foundation\Api\RequestBuilders\Traits
 */
trait HasUsersFields
{
    /**
     * @inheritDoc
     */
    abstract public function addField(string|array $fields);

    /**
     * List of additional profile fields that need to be returned. See
     * {@see https://dev.vk.com/en/reference/objects/user detailed description}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param array|_UsersFields|UsersFields $fields
     *
     * @return $this
     */
    public function fields(array|_UsersFields|UsersFields $fields): static
    {
        return $this->addField([
            __FUNCTION__ => is_array($fields)
                ? $fields
                : $fields->fields->toArray(),
        ]);
    }
}