<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Users\ProfileFields;

use Illuminate\Support\Collection;

/**
 * Class CareerField
 * @package Hopex\VkSdk\Foundation\Core\Models\Users\ProfileFields
 */
class CareerField
{
    private const CITY_ID = 'city_id';
    private const COUNTRY_ID = 'country_id';
    private const FROM = 'from';
    private const GROUP_ID = 'group_id';
    private const POSITION = 'position';

    /**
     * @var int|null
     */
    public ?int $cityId;

    /**
     * @var int|null
     */
    public ?int $countryId;

    /**
     * @var int|null
     */
    public ?int $from;

    /**
     * @var int|null
     */
    public ?int $groupId;

    /**
     * @var string|null
     */
    public ?string $position;

    /**
     * CareerField constructor.
     * @param array|Collection $career
     */
    public function __construct(array|Collection $career)
    {
        if ($career instanceof Collection) {
            $this->cityId = $career->has(self::CITY_ID) ? $career->get(self::CITY_ID) : null;
            $this->countryId = $career->has(self::COUNTRY_ID) ? $career->get(self::COUNTRY_ID) : null;
            $this->from = $career->has(self::FROM) ? $career->get(self::FROM) : null;
            $this->groupId = $career->has(self::GROUP_ID) ? $career->get(self::GROUP_ID) : null;
            $this->position = $career->has(self::POSITION) ? $career->get(self::POSITION) : null;
        } else {
            $this->cityId = $career[self::CITY_ID] ?? null;
            $this->countryId = $career[self::COUNTRY_ID] ?? null;
            $this->from = $career[self::FROM] ?? null;
            $this->groupId = $career[self::GROUP_ID] ?? null;
            $this->position = $career[self::POSITION] ?? null;
        }
    }

    /**
     * @return int|null
     */
    public function getCityId(): ?int
    {
        return $this->cityId;
    }

    /**
     * @return int|null
     */
    public function getCountryId(): ?int
    {
        return $this->countryId;
    }

    /**
     * @return int|null
     */
    public function getFrom(): ?int
    {
        return $this->from;
    }

    /**
     * @return int|null
     */
    public function getGroupId(): ?int
    {
        // TODO: добавить сущность
        return $this->groupId;
    }

    /**
     * @return string|null
     */
    public function getPosition(): ?string
    {
        return $this->position;
    }
}
