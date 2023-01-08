<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Users\ProfileFields;

use Hopex\VkSdk\Exceptions\Api\ApiException;
use Illuminate\Support\Collection;
use Throwable;

/**
 * Class CareerField
 * @package Hopex\VkSdk\Foundation\Core\Entities\Users\ProfileFields
 */
class CareerField
{
    private const CITY_ID = 'city_id';
    private const COUNTRY_ID = 'country_id';
    private const FROM = 'from';
    private const GROUP_ID = 'group_id';
    private const POSITION = 'position';

    /**
     * @var Collection
     */
    private Collection $career;

    /**
     * CareerField constructor.
     * @param array|Collection $career
     */
    public function __construct(array|Collection $career)
    {
        if ($career instanceof Collection) {
            $this->career = $career;
        } else {
            $this->career = collect($career);
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
        return $this->career->get(self::CITY_ID);
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
        return $this->career->get(self::COUNTRY_ID);
    }

    /**
     * @return int|null
     */
    public function getFrom(): ?int
    {
        return $this->career->get(self::FROM);
    }

    /**
     * @return int|null
     */
    public function getGroupId(): ?int
    {
        // TODO: добавить сущность
        return $this->career->get(self::GROUP_ID);
    }

    /**
     * @return string|null
     */
    public function getPosition(): ?string
    {
        return $this->career->get(self::POSITION);
    }
}
