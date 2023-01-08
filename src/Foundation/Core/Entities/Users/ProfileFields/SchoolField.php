<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Users\ProfileFields;

use Hopex\VkSdk\Exceptions\Api\ApiException;
use Illuminate\Support\Collection;
use Throwable;

/**
 * Class SchoolField
 * @package Hopex\VkSdk\Foundation\Core\Entities\Users\ProfileFields
 */
class SchoolField
{
    private const CITY_ID = 'city';
    private const COUNTRY_ID = 'country';
    private const ID = 'id';
    private const NAME = 'name';
    private const TYPE = 'type';
    private const TYPE_STR = 'type_str';
    private const YEAR_FROM = 'year_from';
    private const YEAR_GRADUATED = 'year_graduated';
    private const YEAR_TO = 'year_to';
    private const SPECIALITY = 'speciality';

    /**
     * @var Collection
     */
    private Collection $school;

    /**
     * SchoolField constructor.
     * @param array|Collection $school
     */
    public function __construct(array|Collection $school)
    {
        if ($school instanceof Collection) {
            $this->school = $school;
        } else {
            $this->school = collect($school);
        }
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
     * @return int|null
     */
    public function getCityId(): ?int
    {
        return $this->school->get(self::CITY_ID);
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
     * @return int|null
     */
    public function getCountryId(): ?int
    {
        return $this->school->get(self::COUNTRY_ID);
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->school->get(self::ID);
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->school->get(self::NAME);
    }

    /**
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->school->get(self::TYPE);
    }

    /**
     * @return string|null
     */
    public function getTypeStr(): ?string
    {
        return $this->school->get(self::TYPE_STR);
    }

    /**
     * @return int|null
     */
    public function getYearFrom(): ?int
    {
        return $this->school->get(self::YEAR_FROM);
    }

    /**
     * @return int|null
     */
    public function getYearGraduated(): ?int
    {
        return $this->school->get(self::YEAR_GRADUATED);
    }

    /**
     * @return int|null
     */
    public function getYearTo(): ?int
    {
        return $this->school->get(self::YEAR_TO);
    }

    /**
     * @return string|null
     */
    public function getSpeciality(): ?string
    {
        return $this->school->get(self::SPECIALITY);
    }
}
