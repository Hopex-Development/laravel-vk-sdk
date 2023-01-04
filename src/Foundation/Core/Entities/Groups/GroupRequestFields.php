<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Groups;

use Hopex\VkSdk\Foundation\Core\Entities\Databse\Fields\CityField;
use Hopex\VkSdk\Foundation\Core\Entities\Databse\Fields\CountryField;

/**
 * Class GroupRequestFields
 * @package Hopex\VkSdk\Foundation\Core\Entities\Groups
 */
class GroupRequestFields
{
    /**
     * @var int
     */
    public int $groupId;

    /**
     * @var string
     */
    public string $title;

    /**
     * @var string
     */
    public string $address;

    /**
     * @var string
     */
    public string $additionalAddress;

    /**
     * @var int
     */
    public int $countryId;

    /**
     * @var int
     */
    public int $cityId;

    /**
     * @var int
     */
    public int $metroId;

    /**
     * @var float
     */
    public float $latitude;

    /**
     * @var float
     */
    public float $longitude;

    /**
     * @var string
     */
    public string $phone;

    /**/
    /**
     * @var string
     */
    public string $workInfoStatus;

    /**/
    /**
     * @var string
     */
    public string $timetable;

    /**
     * @var bool
     */
    public bool $isMainAddress;

    /**
     * @param int $groupId
     * @return GroupRequestFields
     */
    public function setGroupId(int $groupId): GroupRequestFields
    {
        // TODO: добавить принимаемый параметр Group аналогично $this->setCityId(int|CityField $city)
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @param string $title
     * @return GroupRequestFields
     */
    public function setTitle(string $title): GroupRequestFields
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $address
     * @return GroupRequestFields
     */
    public function setAddress(string $address): GroupRequestFields
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @param string $additionalAddress
     * @return GroupRequestFields
     */
    public function setAdditionalAddress(string $additionalAddress): GroupRequestFields
    {
        $this->additionalAddress = $additionalAddress;
        return $this;
    }

    /**
     * @param int|CountryField $country
     * @return GroupRequestFields
     */
    public function setCountryId(int|CountryField $country): GroupRequestFields
    {
        $this->countryId = $country instanceof CountryField ? $country->getId() : $country;
        return $this;
    }

    /**
     * @param int|CityField $city
     * @return GroupRequestFields
     */
    public function setCityId(int|CityField $city): GroupRequestFields
    {
        $this->cityId = $city instanceof CityField ? $city->getId() : $city;
        return $this;
    }

    /**
     * @param int $metroId
     * @return GroupRequestFields
     */
    public function setMetroId(int $metroId): GroupRequestFields
    {
        // TODO: добавить MetroField
        $this->metroId = $metroId;
        return $this;
    }

    /**
     * @param float $latitude
     * @return GroupRequestFields
     */
    public function setLatitude(float $latitude): GroupRequestFields
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @param float $longitude
     * @return GroupRequestFields
     */
    public function setLongitude(float $longitude): GroupRequestFields
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @param string $phone
     * @return GroupRequestFields
     */
    public function setPhone(string $phone): GroupRequestFields
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @param string $workInfoStatus
     * @return GroupRequestFields
     */
    public function setWorkInfoStatus(string $workInfoStatus): GroupRequestFields
    {
        $this->workInfoStatus = $workInfoStatus;
        return $this;
    }

    /**
     * @param string $timetable
     * @return GroupRequestFields
     */
    public function setTimetable(string $timetable): GroupRequestFields
    {
        $this->timetable = $timetable;
        return $this;
    }

    /**
     * @param bool $isMainAddress
     * @return GroupRequestFields
     */
    public function setIsMainAddress(bool $isMainAddress): GroupRequestFields
    {
        $this->isMainAddress = $isMainAddress;
        return $this;
    }
}
