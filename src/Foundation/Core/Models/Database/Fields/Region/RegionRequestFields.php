<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Database\Fields\Region;

use Hopex\VkSdk\Foundation\Core\Models\Database\Traits\DatabaseEnumerableRequest;
use Hopex\VkSdk\Foundation\Core\Models\Database\Traits\DatabaseSearchableRequest;

/**
 * Class RegionRequestFields
 * @package Hopex\VkSdk\Foundation\Core\Models\Database\Fields\Region
 */
class RegionRequestFields
{
    use DatabaseEnumerableRequest;
    use DatabaseSearchableRequest;

    /**
     * @var int|null
     */
    public ?int $country_id = null;

    /**
     * @param int $country_id
     * @return RegionRequestFields
     */
    public function setCountryId(int $country_id): RegionRequestFields
    {
        $this->country_id = $country_id;
        return $this;
    }
}
