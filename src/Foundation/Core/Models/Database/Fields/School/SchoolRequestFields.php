<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Database\Fields\School;

use Hopex\VkSdk\Foundation\Core\Models\Database\Traits\DatabaseEnumerableRequest;
use Hopex\VkSdk\Foundation\Core\Models\Database\Traits\DatabaseSearchableRequest;

/**
 * Class SchoolRequestFields
 * @package Hopex\VkSdk\Foundation\Core\Models\Database\Fields\City
 */
class SchoolRequestFields
{
    use DatabaseSearchableRequest;
    use DatabaseEnumerableRequest;

    /**
     * @var int|null
     */
    public ?int $city_id = null;

    /**
     * @param int $city_id
     * @return SchoolRequestFields
     */
    public function setCityId(int $city_id): SchoolRequestFields
    {
        $this->city_id = $city_id;
        return $this;
    }
}
