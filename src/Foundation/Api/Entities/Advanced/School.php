<?php

namespace Hopex\VkSdk\Foundation\Api\Entities\Advanced;

use Hopex\VkSdk\Foundation\Api\Entities\AbstractEntity;

/**
 * School in which the user studied.
 *
 * @package Hopex\VkSdk\Foundation\Api\Entities\Advanced
 *
 * @link    https://dev.vk.com/en/reference/objects/user#schools
 *
 * @property-read string $typeStr
 * @property-read int    $type
 * @property-read string $speciality
 * @property-read string $class
 * @property-read int    $yearGraduated
 * @property-read int    $yearTo
 * @property-read int    $yearFrom
 * @property-read string $name
 * @property-read int    $city
 * @property-read int    $country
 */
class School extends AbstractEntity
{
    /**
     * The country in which the school is located.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#schools
     *
     * @return int
     */
    public function country(): int
    {
        return $this->country;
    }

    /**
     * The identifier of the city in which the school is located.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#schools
     *
     * @return int
     */
    public function city(): int
    {
        return $this->city ?? 0;
    }

    /**
     * Name of school.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#schools
     *
     * @return string
     */
    public function name(): string
    {
        return $this->name ?? '';
    }

    /**
     * Year of commencement of training.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#schools
     *
     * @return int
     */
    public function yearFrom(): int
    {
        return $this->yearFrom ?? 0;
    }

    /**
     * Year of graduation.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#schools
     *
     * @return int
     */
    public function yearTo(): int
    {
        return $this->yearTo ?? 0;
    }

    /**
     * The year of issue.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#schools
     *
     * @return int
     */
    public function yearGraduated(): int
    {
        return $this->yearGraduated ?? 0;
    }

    /**
     * The letter of the class.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#schools
     *
     * @return string
     */
    public function class(): string
    {
        return $this->class ?? '';
    }

    /**
     * Specialization.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#schools
     *
     * @return string
     */
    public function speciality(): string
    {
        return $this->speciality ?? '';
    }

    /**
     * The type identifier.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#schools
     *
     * @return int
     */
    public function type(): int
    {
        return $this->type ?? 0;
    }

    /**
     * Name of type. Possible Values for Couples `type`:`typeStr`.
     * <br><br>
     * * 0 — School
     * * 1 — Gymnasium
     * * 2 — Lyceum
     * * 3 — Boarding school
     * * 4 — The evening school
     * * 5 — The school of music
     * * 6 — Sports school
     * * 7 — Art school
     * * 8 — College
     * * 9 — Professional lyceum
     * * 10 — Technical school
     * * 11 — Vocational school
     * * 12 — College (2)
     * * 13 — School of arts
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#schools
     *
     * @return string
     */
    public function typeStr(): string
    {
        return match ($this->type) {
            0 => 'School',
            1 => 'Gymnasium',
            2 => 'Lyceum',
            3 => 'Boarding school',
            4 => 'The evening school',
            5 => 'The school of music',
            6 => 'Sports school',
            7 => 'Art school',
            8 => 'College',
            9 => 'Professional lyceum',
            10 => 'Technical school',
            11 => 'Vocational school',
            12 => 'College (2)',
            13 => 'School of arts',
            default => '',
        };
    }
}
