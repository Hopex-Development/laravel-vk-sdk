<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Database\Fields\Metro;

use Hopex\VkSdk\Foundation\Core\Models\Database\Traits\DatabaseCanExtendRequest;
use Hopex\VkSdk\Foundation\Core\Models\Database\Traits\DatabaseEnumerableRequest;

/**
 * Class MetroStationRequestFields
 * @package Hopex\VkSdk\Foundation\Core\Models\Database\Fields\Metro
 */
class MetroStationRequestFields
{
    use DatabaseEnumerableRequest;
    use DatabaseCanExtendRequest;

    /**
     * @var array|null
     */
    public ?array $station_ids = null;

    /**
     * @var array|null
     */
    public ?array $city_ids = null;

    /**
     * @param array $station_ids
     * @return MetroStationRequestFields
     */
    public function setStationIds(array $station_ids): MetroStationRequestFields
    {
        $this->station_ids = $station_ids;
        return $this;
    }

    /**
     * @param array $city_ids
     * @return MetroStationRequestFields
     */
    public function setCityIds(array $city_ids): MetroStationRequestFields
    {
        $this->city_ids = $city_ids;
        return $this;
    }
}
