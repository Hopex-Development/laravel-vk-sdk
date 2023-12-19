<?php

namespace Hopex\VkSdk\Foundation\Api\Entities\Advanced;

use Hopex\VkSdk\Foundation\Api\Entities\AbstractEntity;

/**
 * University in which the user studied.
 *
 * @package Hopex\VkSdk\Foundation\Api\Entities\Advanced
 *
 * @link    https://dev.vk.com/en/reference/objects/user#universities
 *
 * @property-read string $educationStatus
 * @property-read string $educationForm
 * @property-read int    $graduation
 * @property-read string $chairName
 * @property-read int    $chair
 * @property-read string $facultyName
 * @property-read int    $faculty
 * @property-read string $name
 * @property-read int    $city
 * @property-read int    $country
 * @property-read int    $id
 */
class University extends AbstractEntity
{
    /**
     * University ID.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#universities
     *
     * @return int
     */
    public function id(): int
    {
        return $this->id ?? 0;
    }

    /**
     * The identifier of the country in which the university is located.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#universities
     *
     * @return int
     */
    public function country(): int
    {
        return $this->country ?? 0;
    }

    /**
     * The identifier of the city in which the university is located.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#universities
     *
     * @return int
     */
    public function city(): int
    {
        return $this->city ?? 0;
    }

    /**
     * The name of the university.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#universities
     *
     * @return string
     */
    public function name(): string
    {
        return $this->name ?? '';
    }

    /**
     * ID of the faculty.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#universities
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
     * @link    https://dev.vk.com/en/reference/objects/user#universities
     *
     * @return string
     */
    public function facultyName(): string
    {
        return $this->facultyName ?? '';
    }

    /**
     * The identifier of the department.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#universities
     *
     * @return int
     */
    public function chair(): int
    {
        return $this->chair ?? 0;
    }

    /**
     * The name of the department.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#universities
     *
     * @return string
     */
    public function chairName(): string
    {
        return $this->chairName ?? '';
    }

    /**
     * Year of graduation.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#universities
     *
     * @return int
     */
    public function graduation(): int
    {
        return $this->graduation ?? 0;
    }

    /**
     * Form of training.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#universities
     *
     * @return string
     */
    public function educationForm(): string
    {
        return $this->educationForm ?? '';
    }

    /**
     * Status (for example, “Graduate (specialist)).
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#universities
     *
     * @return string
     */
    public function educationStatus(): string
    {
        return $this->educationStatus ?? '';
    }
}
