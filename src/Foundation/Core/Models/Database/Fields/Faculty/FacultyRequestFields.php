<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Database\Fields\Faculty;

use Hopex\VkSdk\Foundation\Core\Models\Database\Traits\DatabaseEnumerableRequest;

/**
 * Class FacultyRequestFields
 * @package Hopex\VkSdk\Foundation\Core\Models\Database\Fields\Faculty
 */
class FacultyRequestFields
{
    use DatabaseEnumerableRequest;

    /**
     * @var int|null
     */
    public ?int $university_id = null;

    /**
     * @param int $university_id
     * @return FacultyRequestFields
     */
    public function setUniversityId(int $university_id): FacultyRequestFields
    {
        $this->university_id = $university_id;
        return $this;
    }
}
