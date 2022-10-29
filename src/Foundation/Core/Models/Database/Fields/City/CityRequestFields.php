<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Database\Fields\City;

use Hopex\VkSdk\Foundation\Core\Models\Database\Traits\DatabaseEnumerableRequest;
use Hopex\VkSdk\Foundation\Core\Models\Database\Traits\DatabaseSearchableRequest;

/**
 * Class CityRequestFields
 * @package Hopex\VkSdk\Foundation\Core\Models\Database\Fields\City
 */
class CityRequestFields
{
    use DatabaseEnumerableRequest;
    use DatabaseSearchableRequest;

    /**
     * @var array|null
     */
    public ?array $city_ids = null;

    /**
     * @var int|null
     */
    public ?int $country_id = null;

    /**
     * @var int|null
     */
    public ?int $region_id = null;

    /**
     * @var bool|null
     */
    public ?bool $need_all = null;

    /**
     * @param array $city_ids
     * @return CityRequestFields
     */
    public function setCityIds(array $city_ids): CityRequestFields
    {
        $this->city_ids = $city_ids;
        return $this;
    }

    /**
     * @param int $country_id
     * @return CityRequestFields
     */
    public function setCountryId(int $country_id): CityRequestFields
    {
        $this->country_id = $country_id;
        return $this;
    }

    /**
     * @param int $region_id
     * @return CityRequestFields
     */
    public function setRegionId(int $region_id): CityRequestFields
    {
        $this->region_id = $region_id;
        return $this;
    }

    /**
     * @param bool $need_all
     * @return CityRequestFields
     */
    public function setNeedAll(bool $need_all): CityRequestFields
    {
        $this->need_all = $need_all;
        return $this;
    }
}
