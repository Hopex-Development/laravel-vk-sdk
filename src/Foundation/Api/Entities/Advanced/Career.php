<?php

namespace Hopex\VkSdk\Foundation\Api\Entities\Advanced;

use Hopex\VkSdk\Foundation\Api\Entities\AbstractEntity;

/**
 * Information about the user’s career.
 *
 * @package Hopex\VkSdk\Foundation\Api\Entities\Advanced
 *
 * @link    https://dev.vk.com/en/reference/objects/user#career
 *
 * @property-read string $position
 * @property-read int    $until
 * @property-read int    $from
 * @property-read string $cityName
 * @property-read int    $cityId
 * @property-read int    $countryId
 * @property-read string $company
 * @property-read int    $groupId
 */
class Career extends AbstractEntity
{
    /**
     * Community ID (if available, otherwise `company`).
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#career
     *
     * @return int
     */
    public function groupId(): int
    {
        return $this->groupId ?? 0;
    }

    /**
     * Company name (if available, otherwise `groupId`).
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#career
     *
     * @return string
     */
    public function company(): string
    {
        return $this->company ?? '';
    }

    /**
     * Country identifier.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#career
     *
     * @return int
     */
    public function countryId(): int
    {
        return $this->countryId ?? 0;
    }

    /**
     * City ID (if available, otherwise `cityName`).
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#career
     *
     * @return int
     */
    public function cityId(): int
    {
        return $this->cityId ?? 0;
    }

    /**
     * Name of the city (if available, otherwise)) `cityId`).
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#career
     *
     * @return string
     */
    public function cityName(): string
    {
        return $this->cityName ?? '';
    }

    /**
     * Year of commencement of work.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#career
     *
     * @return int
     */
    public function from(): int
    {
        return $this->from ?? 0;
    }

    /**
     * The year of termination of employment.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#career
     *
     * @return int
     */
    public function until(): int
    {
        return $this->until ?? 0;
    }

    /**
     * Position.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#career
     *
     * @return string
     */
    public function position(): string
    {
        return $this->position ?? '';
    }
}
