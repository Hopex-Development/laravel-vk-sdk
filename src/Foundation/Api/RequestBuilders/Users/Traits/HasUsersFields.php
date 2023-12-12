<?php

namespace Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Traits;

use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Advanced\UsersFields;
use Hopex\VkSdk\Facades\SimpleRequestBuilders\UsersFields as _UsersFields;

/**
 * HasUsersFields.
 *
 * @package Hopex\VkSdk\Foundation\Api\RequestBuilders\Traits
 *
 * @method addField(array|UsersFields $array)
 */
trait HasUsersFields
{
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