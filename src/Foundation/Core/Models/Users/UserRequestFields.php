<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Users;

/**
 * Class UserRequestFields
 * @package Hopex\VkSdk\Foundation\Core\Models\Users
 * @see https://dev.vk.com/method/users
 */
class UserRequestFields
{
    /**
     * @var array|null
     */
    public ?array $user_ids = null;

    /**
     * @var int|null
     */
    public ?int $user_id = null;

    /**
     * @var bool
     */
    public bool $extended = false;

    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @var string|null
     */
    public ?string $comment = null;

    /**
     * @var int|null
     */
    public ?int $offset = null;

    /**
     * @var int|null
     */
    public ?int $count = null;

    /**
     * @var array|null
     */
    public ?array $fields = null;

    /**
     * @var string|null
     */
    public ?string $name_case = null;

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
     * @param int|null $user_id
     * @return UserRequestFields
     */
    public function setUserId(?int $user_id): UserRequestFields
    {
        $this->user_id = $user_id;
        return $this;
    }

    /**
     * @param bool $extended
     * @return UserRequestFields
     */
    public function setExtended(bool $extended): UserRequestFields
    {
        $this->extended = $extended;
        return $this;
    }

    /**
     * @param string|null $type
     * @return UserRequestFields
     */
    public function setReportType(?string $type): UserRequestFields
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param string|null $comment
     * @return UserRequestFields
     */
    public function setComment(?string $comment): UserRequestFields
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @param int|null $offset
     * @return UserRequestFields
     */
    public function setOffset(?int $offset): UserRequestFields
    {
        $this->offset = $offset;
        return $this;
    }

    /**
     * @param int|null $count
     * @return UserRequestFields
     */
    public function setCount(?int $count): UserRequestFields
    {
        $this->count = $count;
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
