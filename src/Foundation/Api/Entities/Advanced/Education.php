<?php

namespace Hopex\VkSdk\Foundation\Api\Entities\Advanced;

use Hopex\VkSdk\Foundation\Api\Entities\Entity;

/**
 * Information about the higher educational institution of the user.
 *
 * @package Hopex\VkSdk\Foundation\Api\Entities\Advanced
 *
 * @link    https://dev.vk.com/en/reference/objects/user#education
 *
 * @property-read int    $graduation
 * @property-read string $facultyName
 * @property-read int    $faculty
 * @property-read string $universityName
 * @property-read int    $university
 */
class Education extends Entity
{
    /**
     * University ID.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#education
     *
     * @return int
     */
    public function university(): int
    {
        return $this->university ?? 0;
    }

    /**
     * The name of the university.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#education
     *
     * @return string
     */
    public function universityName(): string
    {
        return $this->universityName ?? '';
    }

    /**
     * ID of the faculty.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#education
     *
     * @return int
     */
    public function faculty(): int
    {
        return $this->faculty ?? 0;
    }

    /**
     * The name of the faculty.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#education
     *
     * @return string
     */
    public function facultyName(): string
    {
        return $this->facultyName ?? '';
    }

    /**
     * Year of end.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#education
     *
     * @return int
     */
    public function graduation(): int
    {
        return $this->graduation ?? 0;
    }
}
