<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Database\Fields\Country;

use Hopex\VkSdk\Foundation\Core\Models\Database\Traits\DatabaseEnumerableRequest;

/**
 * Class CountryRequestFields
 * @package Hopex\VkSdk\Foundation\Core\Models\Database\Fields\Country
 */
class CountryRequestFields
{
    use DatabaseEnumerableRequest;

    /**
     * @var array|null
     */
    public ?array $country_ids = null;

    /**
     * @var bool|null
     */
    public ?bool $need_all = null;

    /**
     * @var string|null
     */
    public ?string $code = null;

    /**
     * @param array $country_ids
     * @return CountryRequestFields
     */
    public function setCountryIds(array $country_ids): CountryRequestFields
    {
        $this->country_ids = $country_ids;
        return $this;
    }

    /**
     * @param bool $need_all
     * @return CountryRequestFields
     */
    public function setNeedAll(bool $need_all): CountryRequestFields
    {
        $this->need_all = $need_all;
        return $this;
    }

    /**
     * @param string $code
     * @return CountryRequestFields
     */
    public function setCode(string $code): CountryRequestFields
    {
        $this->code = $code;
        return $this;
    }
}
