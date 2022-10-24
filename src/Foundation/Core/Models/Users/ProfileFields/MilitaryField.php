<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Users\ProfileFields;

use Hopex\VkSdk\Exceptions\Api\ApiException;
use Illuminate\Support\Collection;
use Throwable;

/**
 * Class MilitaryField
 * @package Hopex\VkSdk\Foundation\Core\Models\Users\ProfileFields
 */
class MilitaryField
{
    private const COUNTRY_ID = 'country_id';
    private const UNIT = 'unit';
    private const UNIT_ID = 'unit_id';
    private const FROM = 'from';
    private const UNTIL = 'until';

    /**
     * @var Collection
     */
    public Collection $military;

    /**
     * MilitaryField constructor.
     * @param array|Collection $military
     */
    public function __construct(array|Collection $military)
    {
        if ($military instanceof Collection) {
            $this->military = $military;
        } else {
            $this->military = collect($military);
        }
    }

    /**
     * @return int
     */
    public function getCountryId(): int
    {
        return $this->military->get(self::COUNTRY_ID);
    }

    /**
     * @param string $token
     * @return CountryField
     * @throws ApiException
     * @throws Throwable
     */
    public function getCountry(string $token): CountryField
    {
        return new CountryField($this->getCountryId(), $token);
    }

    /**
     * @return int
     */
    public function getUnit(): int
    {
        return $this->military->get(self::UNIT);
    }

    /**
     * @return int
     */
    public function getUnitId(): int
    {
        return $this->military->get(self::UNIT_ID);
    }

    /**
     * @return int
     */
    public function getFrom(): int
    {
        return $this->military->get(self::FROM);
    }

    /**
     * @return int
     */
    public function getUntil(): int
    {
        return $this->military->get(self::UNTIL);
    }
}
