<?php

namespace Hopex\VkSdk\Foundation\Core\Entities;

use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Chair\ChairRequestFields;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\City\CityRequestFields;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Country\CountryRequestFields;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Faculty\FacultyRequestFields;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Metro\MetroStationRequestFields;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Region\RegionRequestFields;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\School\SchoolClasses\SchoolClassRequestFields;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\School\SchoolRequestFields;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\University\UniversityRequestFields;
use Hopex\VkSdk\Foundation\Core\Entities\Groups\GroupRequestFields;
use Hopex\VkSdk\Foundation\Core\Entities\Messages\MessageRequestFields;
use Hopex\VkSdk\Foundation\Core\Entities\Users\UserRequestFields;

/**
 * Class RequestFields
 * @package Hopex\VkSdk\Foundation\Core\Entities
 */
class RequestFields
{
    /**
     * @return GroupRequestFields
     */
    public function group(): GroupRequestFields
    {
        return new GroupRequestFields();
    }

    /**
     * @return MessageRequestFields
     */
    public function message(): MessageRequestFields
    {
        return new MessageRequestFields();
    }

    /**
     * @return UserRequestFields
     */
    public function user(): UserRequestFields
    {
        return new UserRequestFields();
    }

    /**
     * @return UniversityRequestFields
     */
    public function university(): UniversityRequestFields
    {
        return new UniversityRequestFields();
    }

    /**
     * @return SchoolRequestFields
     */
    public function school(): SchoolRequestFields
    {
        return new SchoolRequestFields();
    }

    /**
     * @return SchoolClassRequestFields
     */
    public function schoolClass(): SchoolClassRequestFields
    {
        return new SchoolClassRequestFields();
    }

    /**
     * @return RegionRequestFields
     */
    public function region(): RegionRequestFields
    {
        return new RegionRequestFields();
    }

    /**
     * @return MetroStationRequestFields
     */
    public function metroStation(): MetroStationRequestFields
    {
        return new MetroStationRequestFields();
    }

    /**
     * @return FacultyRequestFields
     */
    public function faculty(): FacultyRequestFields
    {
        return new FacultyRequestFields();
    }

    /**
     * @return CountryRequestFields
     */
    public function country(): CountryRequestFields
    {
        return new CountryRequestFields();
    }

    /**
     * @return CityRequestFields
     */
    public function city(): CityRequestFields
    {
        return new CityRequestFields();
    }

    /**
     * @return ChairRequestFields
     */
    public function chair(): ChairRequestFields
    {
        return new ChairRequestFields();
    }
}
