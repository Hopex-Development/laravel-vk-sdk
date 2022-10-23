<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Users\ProfileFields;

use Carbon\Carbon;
use Illuminate\Support\Collection;

/**
 * Class SchoolField
 * @package Hopex\VkSdk\Foundation\Core\Models\Users\ProfileFields
 */
class SchoolField
{
    private const CITY = 'city';
    private const COUNTRY = 'country';
    private const ID = 'id';
    private const NAME = 'name';
    private const TYPE = 'type';
    private const TYPE_STR = 'type_str';
    private const YEAR_FROM = 'year_from';
    private const YEAR_GRADUATED = 'year_graduated';
    private const YEAR_TO = 'year_to';
    private const SPECIALITY = 'speciality';

    /**
     * @var int|null
     */
    public ?int $city;

    /**
     * @var int|null
     */
    public ?int $country;

    /**
     * @var int|null
     */
    public ?int $id;

    /**
     * @var string|null
     */
    public ?string $name;

    /**
     * @var int|null
     */
    public ?int $type;

    /**
     * @var string|null
     */
    public ?string $typeStr;

    /**
     * @var int|null
     */
    public ?int $yearFrom;

    /**
     * @var int|null
     */
    public ?int $yearGraduated;

    /**
     * @var int|null
     */
    public ?int $yearTo;

    /**
     * @var string|null
     */
    public ?string $speciality;


    /**
     * SchoolField constructor.
     * @param array|Collection $school
     */
    public function __construct(array|Collection $school)
    {
        if ($school instanceof Collection) {
            $this->city = $school->has(self::CITY) ? $school->get(self::CITY) : null;
            $this->country = $school->has(self::COUNTRY) ? $school->get(self::COUNTRY) : null;
            $this->id = $school->has(self::ID) ? $school->get(self::ID) : null;
            $this->name = $school->has(self::NAME) ? $school->get(self::NAME) : null;
            $this->type = $school->has(self::TYPE) ? $school->get(self::TYPE) : null;
            $this->typeStr = $school->has(self::TYPE_STR) ? $school->get(self::TYPE_STR) : null;
            $this->yearFrom = $school->has(self::YEAR_FROM) ? $school->get(self::YEAR_FROM) : null;
            $this->yearGraduated = $school->has(self::YEAR_GRADUATED) ? $school->get(self::YEAR_GRADUATED) : null;
            $this->yearTo = $school->has(self::YEAR_TO) ? $school->get(self::YEAR_TO) : null;
            $this->speciality = $school->has(self::SPECIALITY) ? $school->get(self::SPECIALITY) : null;
        } else {
            $this->city = $school[self::CITY] ?? null;
            $this->country = $school[self::COUNTRY] ?? null;
            $this->id = $school[self::ID] ?? null;
            $this->name = $school[self::NAME] ?? null;
            $this->type = $school[self::TYPE] ?? null;
            $this->typeStr = $school[self::TYPE_STR] ?? null;
            $this->yearFrom = $school[self::YEAR_FROM] ?? null;
            $this->yearGraduated = $school[self::YEAR_GRADUATED] ?? null;
            $this->yearTo = $school[self::YEAR_TO] ?? null;
            $this->speciality = $school[self::SPECIALITY] ?? null;
        }
    }

    /**
     * @return int|null
     */
    public function getCity(): ?int
    {
        return $this->city;
    }

    /**
     * @return int|null
     */
    public function getCountry(): ?int
    {
        return $this->country;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * @return string|null
     */
    public function getTypeStr(): ?string
    {
        return $this->typeStr;
    }

    /**
     * @return int|null
     */
    public function getYearFrom(): ?int
    {
        return $this->yearFrom;
    }

    /**
     * @return int|null
     */
    public function getYearGraduated(): ?int
    {
        return $this->yearGraduated;
    }

    /**
     * @return int|null
     */
    public function getYearTo(): ?int
    {
        return $this->yearTo;
    }

    /**
     * @return string|null
     */
    public function getSpeciality(): ?string
    {
        return $this->speciality;
    }
}
