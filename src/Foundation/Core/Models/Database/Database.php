<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Database;

use Hopex\VkSdk\Exceptions\Api\ApiException;
use Hopex\VkSdk\Foundation\Core\Api\Request;
use Hopex\VkSdk\Foundation\Core\Models\Databse\Fields\CityField;
use Hopex\VkSdk\Foundation\Core\Models\Databse\Fields\CountryField;
use Illuminate\Support\Collection;
use Throwable;

/**
 * Class Database
 * @package Hopex\VkSdk\Foundation\Core\Models\Database
 */
class Database extends Request
{
    private const SCOPE = 'database.';
    private const CITY_IDS = 'city_ids';
    private const COUNTRY_IDS = 'country_ids';

    /**
     * @param array $args
     * @return Collection
     * @throws ApiException
     * @throws Throwable
     */
    public function getCitiesById(array $args = []): Collection
    {
        return collect($this->call(self::SCOPE . 'getCitiesById', $args))
            ->map(function ($item) {
                return new CityField($item);
            });
    }

    /**
     * @param int $cityId
     * @return Collection
     * @throws ApiException
     * @throws Throwable
     */
    public function getCityById(int $cityId): Collection
    {
        return $this->getCitiesById([
            self::CITY_IDS => $cityId
        ])->first();
    }

    /**
     * @param array $args
     * @return Collection
     * @throws ApiException
     * @throws Throwable
     */
    public function getCountriesById(array $args = []): Collection
    {
        return collect($this->call(self::SCOPE . 'getCountriesById', $args))
            ->map(function ($item) {
                return new CountryField($item);
            });
    }

    /**
     * @param int $countryId
     * @return Collection
     * @throws ApiException
     * @throws Throwable
     */
    public function getCountryById(int $countryId): Collection
    {
        return $this->getCountriesById([
            self::COUNTRY_IDS => $countryId
        ])->first();
    }
}
