<?php

namespace Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Traits;

use Hopex\VkSdk\Facades\SimpleRequestBuilders\Users\UsersNameCases as _UsersNameCases;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Advanced\UsersNameCases;

/**
 * The functionality of adding a field `nameCase` to the request.
 *
 * @package Hopex\VkSdk\Foundation\Api\RequestBuilders\Traits
 */
trait HasUsersNameCase
{
    /**
     * {@inheritdoc}
     */
    abstract public function addField(string|array $fields);

    /**
     * Indicate the name and surname of the user.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param array|_UsersNameCases|UsersNameCases $nameCases
     *
     * @return $this
     */
    public function nameCase(array|_UsersNameCases|UsersNameCases $nameCases): static
    {
        return $this->addField([
            __FUNCTION__ => is_array($nameCases)
                ? $nameCases
                : $nameCases->fields->toArray(),
        ]);
    }
}
