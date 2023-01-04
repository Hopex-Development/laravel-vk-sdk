<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Chair;

use Hopex\VkSdk\Foundation\Core\Entities\Database\Traits\DatabaseEnumerableRequest;

/**
 * Class ChairRequestFields
 * @package Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Chair
 */
class ChairRequestFields
{
    use DatabaseEnumerableRequest;

    /**
     * @var int|null
     */
    public ?int $faculty_id = null;

    /**
     * @param int $faculty_id
     * @return ChairRequestFields
     */
    public function setFacultyId(int $faculty_id): ChairRequestFields
    {
        $this->faculty_id = $faculty_id;
        return $this;
    }
}
