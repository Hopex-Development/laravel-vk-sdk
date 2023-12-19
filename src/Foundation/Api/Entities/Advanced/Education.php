<?php

namespace Hopex\VkSdk\Foundation\Api\Entities\Advanced;

use Hopex\VkSdk\Foundation\Api\Entities\AbstractEntity;

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
 * @property-read string $educationForm
 * @property-read string $educationStatus
 */
class Education extends AbstractEntity
{
    /**
     * University ID.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#education
     *
     * @return int
     */
    public function universityId(): int
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
    public function facultyId(): int
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
    public function graduationYear(): int
    {
        return $this->graduation ?? 0;
    }

    /**
     * Format of education.
     * <br><br>
     *
     * Possible values:
     * * Full-time
     * * Part-time
     * * Distance Learning
     * * External
     * * Distance learning
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#education
     *
     * @return string
     */
    public function educationForm(): string
    {
        return $this->educationForm ?? '';
    }

    /**
     * Education status.
     * <br><br>
     *
     * Possible values:
     * * Undergraduate applicant
     * * Student (Specialist)
     * * Student (Bachelor's)
     * * Student (Master's)
     * * Alumnus (Specialist)
     * * Alumnus (Bachelor's)
     * * Alumnus (Master's)
     * * Postgraduate Student
     * * Candidate of Sciences
     * * PhD
     * * Intern
     * * Resident
     * * Postgraduate applicant
     * * Assistant
     * * Doctoral student
     * * Adjunct professor
     * * Researcher
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#education
     *
     * @return string
     */
    public function educationStatus(): string
    {
        return $this->educationStatus ?? '';
    }
}
