<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Database;

use Hopex\VkSdk\Exceptions\Api\ApiException;
use Hopex\VkSdk\Foundation\Core\Api\Request;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Chair\ChairFieldsCollection;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Chair\ChairRequestFields;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\City\CityField;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\City\CityFieldsCollection;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\City\CityRequestFields;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Country\CountryField;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Country\CountryFieldsCollection;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Country\CountryRequestFields;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Faculty\FacultyFieldsCollection;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Faculty\FacultyRequestFields;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Metro\MetroStationField;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Metro\MetroStationFieldsCollection;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Metro\MetroStationRequestFields;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Region\RegionFieldsCollection;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Region\RegionRequestFields;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\School\SchoolClasses\SchoolClassField;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\School\SchoolClasses\SchoolClassFieldsCollection;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\School\SchoolClasses\SchoolClassRequestFields;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\School\SchoolField;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\School\SchoolFieldsCollection;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\School\SchoolRequestFields;
use Illuminate\Support\Collection;
use Throwable;

/**
 * Class Database
 * @package Hopex\VkSdk\Foundation\Core\Entities\Database
 */
class Database extends Request
{
    private const SCOPE = 'database.';

    /**
     * @param CityRequestFields $cityRequestFields
     * @return CityFieldsCollection
     * @throws ApiException
     * @throws Throwable
     */
    public function getCities(CityRequestFields $cityRequestFields): CityFieldsCollection
    {
        return new CityFieldsCollection($this->call(self::SCOPE . 'getCities', get_object_vars($cityRequestFields)));
    }

    /**
     * @param int $cityId
     * @return CityField
     * @throws ApiException
     * @throws Throwable
     */
    public function getCityById(int $cityId): CityField
    {
        return $this->getCitiesById((new CityRequestFields())->setCityIds([$cityId]))->first();
    }

    /**
     * @param CityRequestFields $cityRequestFields
     * @return Collection
     * @throws ApiException
     * @throws Throwable
     */
    public function getCitiesById(CityRequestFields $cityRequestFields): Collection
    {
        return collect($this->call(self::SCOPE . 'getCitiesById', get_object_vars($cityRequestFields))
            ->map(function ($city) {
                return new CityField($city);
            }));
    }

    /**
     * @param CountryRequestFields $countryRequestFields
     * @return CountryFieldsCollection
     * @throws ApiException
     * @throws Throwable
     */
    public function getCountries(CountryRequestFields $countryRequestFields): CountryFieldsCollection
    {
        return new CountryFieldsCollection($this->call(self::SCOPE . 'getCountries', get_object_vars($countryRequestFields)));
    }

    /**
     * @param int $countryId
     * @return CountryField
     * @throws ApiException
     * @throws Throwable
     */
    public function getCountryById(int $countryId): CountryField
    {
        return $this->getCountriesById((new CountryRequestFields())->setCountryIds([$countryId]))->first();
    }

    /**
     * @param CountryRequestFields $countryRequestFields
     * @return Collection
     * @throws ApiException
     * @throws Throwable
     */
    public function getCountriesById(CountryRequestFields $countryRequestFields): Collection
    {
        return collect($this->call(self::SCOPE . 'getCountriesById', get_object_vars($countryRequestFields)))
            ->map(function ($country) {
                return new CountryField($country);
            });
    }

    /**
     * @param ChairRequestFields $chairRequestFields
     * @return ChairFieldsCollection
     * @throws ApiException
     * @throws Throwable
     */
    public function getChairs(ChairRequestFields $chairRequestFields): ChairFieldsCollection
    {
        return new ChairFieldsCollection($this->call(self::SCOPE . 'getChairs', get_object_vars($chairRequestFields)));
    }

    /**
     * @param MetroStationRequestFields $metroStationRequestFields
     * @return MetroStationFieldsCollection
     * @throws ApiException
     * @throws Throwable
     */
    public function getMetroStations(MetroStationRequestFields $metroStationRequestFields): MetroStationFieldsCollection
    {
        return new MetroStationFieldsCollection($this->call(self::SCOPE . 'getMetroStations', get_object_vars($metroStationRequestFields)));
    }

    /**
     * @param int $stationId
     * @return MetroStationField
     * @throws ApiException
     * @throws Throwable
     */
    public function getMetroStationById(int $stationId): MetroStationField
    {
        return $this->getMetroStationsById((new MetroStationRequestFields())->setStationIds([$stationId]))->first();
    }

    /**
     * @param MetroStationRequestFields $metroStationRequestFields
     * @return Collection
     * @throws ApiException
     * @throws Throwable
     */
    public function getMetroStationsById(MetroStationRequestFields $metroStationRequestFields): Collection
    {
        return collect($this->call(self::SCOPE . 'getMetroStationsById', get_object_vars($metroStationRequestFields))
            ->map(function ($city) {
                return new MetroStationField($city);
            }));
    }

    /**
     * @param FacultyRequestFields $facultyRequestFields
     * @return FacultyFieldsCollection
     * @throws ApiException
     * @throws Throwable
     */
    public function getFaculties(FacultyRequestFields $facultyRequestFields): FacultyFieldsCollection
    {
        return new FacultyFieldsCollection($this->call(self::SCOPE . 'getFaculties', get_object_vars($facultyRequestFields)));
    }

    /**
     * @param RegionRequestFields $regionRequestFields
     * @return RegionFieldsCollection
     * @throws ApiException
     * @throws Throwable
     */
    public function getRegions(RegionRequestFields $regionRequestFields): RegionFieldsCollection
    {
        return new RegionFieldsCollection($this->call(self::SCOPE . 'getRegions', get_object_vars($regionRequestFields)));
    }

    /**
     * @param SchoolRequestFields $schoolRequestFields
     * @param int $schoolId
     * @return SchoolField
     * @throws ApiException
     * @throws Throwable
     */
    public function getSchoolByIds(SchoolRequestFields $schoolRequestFields, int $schoolId): SchoolField
    {
        return $this
            ->getSchools($schoolRequestFields)
            ->getItems()
            ->first(function (SchoolField $school) use ($schoolId) {
                return $school->getId() == $schoolId;
            });
    }

    /**
     * @param SchoolRequestFields $schoolRequestFields
     * @return SchoolFieldsCollection
     * @throws ApiException
     * @throws Throwable
     */
    public function getSchools(SchoolRequestFields $schoolRequestFields): SchoolFieldsCollection
    {
        return new SchoolFieldsCollection($this->call(self::SCOPE . 'getSchools', get_object_vars($schoolRequestFields)));
    }

    /**
     * @param SchoolClassRequestFields $schoolClassRequestFields
     * @param int $schoolClassId
     * @return SchoolClassField
     * @throws ApiException
     * @throws Throwable
     */
    public function getSchoolClassById(SchoolClassRequestFields $schoolClassRequestFields, int $schoolClassId): SchoolClassField
    {
        return $this
            ->getSchoolClasses($schoolClassRequestFields)
            ->getItems()
            ->first(function (SchoolClassField $class) use ($schoolClassId) {
                return $class->getId() == $schoolClassId;
            });
    }

    /**
     * @param SchoolClassRequestFields $schoolClassRequestFields
     * @return SchoolClassFieldsCollection
     * @throws ApiException
     * @throws Throwable
     */
    public function getSchoolClasses(SchoolClassRequestFields $schoolClassRequestFields): SchoolClassFieldsCollection
    {
        return new SchoolClassFieldsCollection($this->call(self::SCOPE . 'getSchoolClasses', get_object_vars($schoolClassRequestFields)));
    }
}
