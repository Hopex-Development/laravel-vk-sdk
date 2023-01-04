<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Users\ProfileFields;

use Illuminate\Support\Collection;

/**
 * Class EducationField
 * @package Hopex\VkSdk\Foundation\Core\Entities\Users\ProfileFields
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
     * @var Collection
     */
    private Collection $education;

    /**
     * EducationField constructor.
     * @param array|Collection $education
     */
    public function __construct(array|Collection $education)
    {
        if ($education instanceof Collection) {
            $this->education = $education;
        } else {
            $this->education = collect($education);
        }
    }

    /**
     * @return int
     */
    public function getUniversity(): int
    {
        return $this->education->get(self::UNIVERSITY);
    }

    /**
     * @return string
     */
    public function getUniversityName(): string
    {
        return $this->education->get(self::UNIVERSITY_NAME);
    }

    /**
     * @return int
     */
    public function getFaculty(): int
    {
        return $this->education->get(self::FACULTY);
    }

    /**
     * @return string
     */
    public function getFacultyName(): string
    {
        return $this->education->get(self::FACULTY_NAME);
    }

    /**
     * @return int
     */
    public function getGraduation(): int
    {
        return $this->education->get(self::GRADUATION);
    }

    /**
     * @return string
     */
    public function getEducationForm(): string
    {
        return $this->education->get(self::EDUCATION_FORM);
    }

    /**
     * @return string
     */
    public function getEducationStatus(): string
    {
        return $this->education->get(self::EDUCATION_STATUS);
    }
}
