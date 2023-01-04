<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\School\SchoolClasses;

/**
 * Class SchoolClassRequestFields
 * @package Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\SchoolClasses
 */
class SchoolClassRequestFields
{
    /**
     * @var int|null
     */
    public ?int $country_id = null;

    /**
     * @param int $country_id
     * @return SchoolClassRequestFields
     */
    public function setCountryId(int $country_id): SchoolClassRequestFields
    {
        $this->country_id = $country_id;
        return $this;
    }
}
