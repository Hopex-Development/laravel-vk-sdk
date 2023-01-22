<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Groups;

/**
 * Class GroupRequestFields
 * @package Hopex\VkSdk\Foundation\Core\Entities\Groups
 */
class GroupRequestFields
{
    /**
     * @var int|null
     */
    public ?int $group_id = null;

    /**
     * @var array|null
     */
    public ?array $group_ids = null;

    /**
     * @var string|null
     */
    public ?string $title = null;

    /**
     * @var string|null
     */
    public ?string $address = null;

    /**
     * @var string|null
     */
    public ?string $additional_address = null;

    /**
     * @var int|null
     */
    public ?int $country_id = null;

    /**
     * @var int|null
     */
    public ?int $city_id = null;

    /**
     * @var int|null
     */
    public ?int $metro_id = null;

    /**
     * @var float|null
     */
    public ?float $latitude = null;

    /**
     * @var float|null
     */
    public ?float $longitude = null;

    /**
     * @var string|null
     */
    public ?string $phone = null;

    /**
     * @var string|null
     */
    public ?string $work_info_status = null;

    /**
     * @var string|null
     */
    public ?string $timetable = null;

    /**
     * @var bool|null
     */
    public ?bool $is_main_address = null;

    /**
     * @param int|null $group_id
     * @return GroupRequestFields
     */
    public function setGroupId(?int $group_id): GroupRequestFields
    {
        $this->group_id = $group_id;
        return $this;
    }

    /**
     * @param array|null $group_ids
     * @return GroupRequestFields
     */
    public function setGroupIds(?array $group_ids): GroupRequestFields
    {
        $this->group_ids = $group_ids;
        return $this;
    }

    /**
     * @param string|null $title
     * @return GroupRequestFields
     */
    public function setTitle(?string $title): GroupRequestFields
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string|null $address
     * @return GroupRequestFields
     */
    public function setAddress(?string $address): GroupRequestFields
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @param string|null $additional_address
     * @return GroupRequestFields
     */
    public function setAdditionalAddress(?string $additional_address): GroupRequestFields
    {
        $this->additional_address = $additional_address;
        return $this;
    }

    /**
     * @param int|null $country_id
     * @return GroupRequestFields
     */
    public function setCountryId(?int $country_id): GroupRequestFields
    {
        $this->country_id = $country_id;
        return $this;
    }

    /**
     * @param int|null $city_id
     * @return GroupRequestFields
     */
    public function setCityId(?int $city_id): GroupRequestFields
    {
        $this->city_id = $city_id;
        return $this;
    }

    /**
     * @param int|null $metro_id
     * @return GroupRequestFields
     */
    public function setMetroId(?int $metro_id): GroupRequestFields
    {
        $this->metro_id = $metro_id;
        return $this;
    }

    /**
     * @param float|null $latitude
     * @return GroupRequestFields
     */
    public function setLatitude(?float $latitude): GroupRequestFields
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @param float|null $longitude
     * @return GroupRequestFields
     */
    public function setLongitude(?float $longitude): GroupRequestFields
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @param string|null $phone
     * @return GroupRequestFields
     */
    public function setPhone(?string $phone): GroupRequestFields
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @param string|null $work_info_status
     * @return GroupRequestFields
     */
    public function setWorkInfoStatus(?string $work_info_status): GroupRequestFields
    {
        $this->work_info_status = $work_info_status;
        return $this;
    }

    /**
     * @param string|null $timetable
     * @return GroupRequestFields
     */
    public function setTimetable(?string $timetable): GroupRequestFields
    {
        $this->timetable = $timetable;
        return $this;
    }

    /**
     * @param bool|null $is_main_address
     * @return GroupRequestFields
     */
    public function setIsMainAddress(?bool $is_main_address): GroupRequestFields
    {
        $this->is_main_address = $is_main_address;
        return $this;
    }
}
