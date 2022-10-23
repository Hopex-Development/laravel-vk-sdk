<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Users\ProfileFields;

use Illuminate\Support\Collection;

/**
 * Class EducationField
 * @package Hopex\VkSdk\Foundation\Core\Models\Users\ProfileFields
 */
class EducationField
{
    private const UNIVERSITY = 'university';
    private const UNIVERSITY_NAME = 'university_name';
    private const FACULTY = 'faculty';
    private const FACULTY_NAME = 'faculty_name';
    private const GRADUATION = 'graduation';
    private const EDUCATION_FORM = 'education_form';
    private const EDUCATION_STATUS = 'education_status';

    /**
     * @var int|null
     */
    public ?int $university;

    /**
     * @var string|null
     */
    public ?string $universityName;

    /**
     * @var int|null
     */
    public ?int $faculty;

    /**
     * @var string|null
     */
    public ?string $facultyName;

    /**
     * @var int|null
     */
    public ?int $graduation;

    /**
     * @var string|null
     */
    public ?string $educationForm;

    /**
     * @var string|null
     */
    public ?string $educationStatus;

    /**
     * EducationField constructor.
     * @param array|Collection $city
     */
    public function __construct(array|Collection $city)
    {
        if ($city instanceof Collection) {
            $this->university = $city->has(self::UNIVERSITY) ? $city->get(self::UNIVERSITY) : null;
            $this->universityName = $city->has(self::UNIVERSITY_NAME) ? $city->get(self::UNIVERSITY_NAME) : null;
            $this->faculty = $city->has(self::FACULTY) ? $city->get(self::FACULTY) : null;
            $this->facultyName = $city->has(self::FACULTY_NAME) ? $city->get(self::FACULTY_NAME) : null;
            $this->graduation = $city->has(self::GRADUATION) ? $city->get(self::GRADUATION) : null;
            $this->educationForm = $city->has(self::EDUCATION_FORM) ? $city->get(self::EDUCATION_FORM) : null;
            $this->educationStatus = $city->has(self::EDUCATION_STATUS) ? $city->get(self::EDUCATION_STATUS) : null;
        } else {
            $this->university = $city[self::UNIVERSITY] ?? null;
            $this->universityName = $city[self::UNIVERSITY_NAME] ?? null;
            $this->faculty = $city[self::FACULTY] ?? null;
            $this->facultyName = $city[self::FACULTY_NAME] ?? null;
            $this->graduation = $city[self::GRADUATION] ?? null;
            $this->educationForm = $city[self::EDUCATION_FORM] ?? null;
            $this->educationStatus = $city[self::EDUCATION_STATUS] ?? null;
        }
    }

    /**
     * @return int
     */
    public function getUniversity(): int
    {
        return $this->university;
    }

    /**
     * @return string
     */
    public function getUniversityName(): string
    {
        return $this->universityName;
    }

    /**
     * @return int
     */
    public function getFaculty(): int
    {
        return $this->faculty;
    }

    /**
     * @return string
     */
    public function getFacultyName(): string
    {
        return $this->facultyName;
    }

    /**
     * @return int
     */
    public function getGraduation(): int
    {
        return $this->graduation;
    }

    /**
     * @return string
     */
    public function getEducationForm(): string
    {
        return $this->educationForm;
    }

    /**
     * @return string
     */
    public function getEducationStatus(): string
    {
        return $this->educationStatus;
    }
}
