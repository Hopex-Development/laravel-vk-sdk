<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Users;

use Illuminate\Support\Collection;

/**
 * Class UserFields
 * @package Hopex\VkSdk\Foundation\Core\Models\Users
 */
class UserFields
{
    /**
     * @var Collection
     */
    public Collection $user;

    /**
     * UserFields constructor.
     * @param Collection $user
     */
    public function __construct(Collection $user)
    {
        $this->user = $user;
    }

    /**
     * @return Collection
     */
    public function getUser(): Collection
    {
        return $this->user;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->user->get(UserProfileFields::ID);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->user->get(UserProfileFields::FIRST_NAME);
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->user->get(UserProfileFields::LAST_NAME);
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return sprintf(
            '%s %s',
            $this->user->get(UserProfileFields::FIRST_NAME),
            $this->user->get(UserProfileFields::LAST_NAME)
        );
    }

    /**
     * @return bool
     */
    public function isAccessClosed(): bool
    {
        return $this->user->get(UserProfileFields::CAN_ACCESS_CLOSED);
    }

    /**
     * @return bool
     */
    public function isClosed(): bool
    {
        return $this->user->get(UserProfileFields::IS_CLOSED);
    }

    /**
     * @param string $key
     * @return mixed
     */
    public function get(string $key): mixed
    {
        return $this->user->get($key);
    }
}
