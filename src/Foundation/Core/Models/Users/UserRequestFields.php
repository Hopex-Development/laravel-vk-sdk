<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Users;

/**
 * Class UserRequestFields
 * @package Hopex\VkSdk\Foundation\Core\Models\Users
 */
class UserRequestFields
{
    /**
     * @var array
     */
    public array $user_ids = [];

    /**
     * @var array
     */
    public array $fields = [];

    /**
     * @var string|null
     */
    public string|null $name_case = null;

    /**
     * @param array $user_ids
     * @return UserRequestFields
     */
    public function setUserIds(array $user_ids): UserRequestFields
    {
        $this->user_ids = $user_ids;
        return $this;
    }

    /**
     * @param array $fields
     * @return UserRequestFields
     */
    public function setProfileFields(array $fields): UserRequestFields
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * @param string $name_case
     * @return UserRequestFields
     */
    public function setNameCase(string $name_case): UserRequestFields
    {
        $this->name_case = $name_case;
        return $this;
    }
}
