<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\University;

use Hopex\VkSdk\Foundation\Core\Entities\Database\Traits\DatabaseEnumerableRequest;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Traits\DatabaseSearchableRequest;

/**
 * Class UniversityRequestFields
 * @package Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\University
 */
class UniversityRequestFields
{
    use DatabaseEnumerableRequest;
    use DatabaseSearchableRequest;

    /**
     * @var int|null
     */
    public ?int $country_id = null;

    /**
     * @var int|null
     */
    public ?int $city_id = null;

    /**
     * @param int $country_id
     * @return UniversityRequestFields
     */
    public function setCountryId(int $country_id): UniversityRequestFields
    {
        $this->country_id = $country_id;
        return $this;
    }

    /**
     * @param int $city_id
     * @return UniversityRequestFields
     */
    public function setCityId(int $city_id): UniversityRequestFields
    {
        $this->city_id = $city_id;
        return $this;
    }
}
