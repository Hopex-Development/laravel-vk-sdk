<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Groups;

use Hopex\VkSdk\Exceptions\Api\ApiException;
use Hopex\VkSdk\Foundation\Core\Api\Request;
use Hopex\VkSdk\Foundation\Core\Models\Databse\Fields\CityField;
use Hopex\VkSdk\Foundation\Core\Models\Databse\Fields\CountryField;
use Illuminate\Support\Collection;
use Throwable;

/**
 * Class GroupFields
 * @package Hopex\VkSdk\Foundation\Core\Models\Groups
 */
class GroupFields
{
    private const GROUP_ID = 'group_id';
    private const TITLE = 'title';
    private const ADDRESS = 'address';
    private const ADDITIONAL_ADDRESS = 'additional_address';
    private const COUNTRY_ID = 'country_id';
    private const CITY_ID = 'city_id';
    private const METRO_ID = 'metro_id';
    private const LATITUDE = 'latitude';
    private const LONGITUDE = 'longitude';
    private const PHONE = 'phone';
    private const WORK_INFO_STATUS = 'work_info_status';
    private const TIMETABLE = 'timetable';
    private const IS_MAIN_ADDRESS = 'is_main_address';

    /**
     * @var Collection
     */
    public Collection $group;

    /**
     * GroupFields constructor.
     * @param array|Collection $group
     */
    public function __construct(array|Collection $group)
    {
        $this->group = $group instanceof Collection ? $group : collect($group);
    }

    /**
     * @return int
     */
    public function getGroupId(): int
    {
        return $this->group->get(self::GROUP_ID);
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->group->get(self::TITLE);
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->group->get(self::ADDRESS);
    }

    /**
     * @return string
     */
    public function getAdditionalAddress(): string
    {
        return $this->group->get(self::ADDITIONAL_ADDRESS);
    }

    /**
     * @return int
     */
    public function getCountryId(): int
    {
        return $this->group->get(self::COUNTRY_ID);
    }

    /**
     * @return CountryField
     * @throws ApiException
     * @throws Throwable
     */
    public function getCountry(): CountryField
    {
        return new CountryField($this->getCountryId());
    }

    /**
     * @return int
     */
    public function getCityId(): int
    {
        return $this->group->get(self::CITY_ID);
    }

    /**
     * @return CityField
     * @throws ApiException
     * @throws Throwable
     */
    public function getCity(): CityField
    {
        return new CityField($this->getCityId());
    }

    /**
     * @return int
     */
    public function getMetroId(): int
    {
        // TODO: добавить метод getMetro(): MetroField
        return $this->group->get(self::METRO_ID);
    }

    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->group->get(self::LATITUDE);
    }

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->group->get(self::LONGITUDE);
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->group->get(self::PHONE);
    }

    /**
     * @return string
     */
    public function getWorkInfoStatus(): string
    {
        return $this->group->get(self::WORK_INFO_STATUS);
    }

    /**
     * @return string
     */
    public function getTimetable(): string
    {
        return $this->group->get(self::TIMETABLE);
    }

    /**
     * @return bool
     */
    public function isMainAddress(): bool
    {
        return $this->group->get(self::IS_MAIN_ADDRESS);
    }
}
