<?php

namespace Hopex\VkSdk\Foundation\Api\Entities\Advanced;

use Hopex\VkSdk\Foundation\Api\Entities\Entity;

/**
 * Information about the military service of the user.
 *
 * @package Hopex\VkSdk\Foundation\Api\Entities\Advanced
 *
 * @link    https://dev.vk.com/en/reference/objects/user#military
 *
 * @property-read int    $until
 * @property-read int    $from
 * @property-read int    $countryId
 * @property-read int    $unitId
 * @property-read string $unit
 */
class Military extends Entity
{
    /**
     * The number of the military unit.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#military
     *
     * @return string
     */
    public function unit(): string
    {
        return $this->unit ?? '';
    }

    /**
     * ID of the military unit in the database.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#military
     *
     * @return int
     */
    public function unitId(): int
    {
        return $this->unitId ?? 0;
    }

    /**
     * ID of the country where the military unit is located.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#military
     *
     * @return int
     */
    public function countryId(): int
    {
        return $this->countryId ?? 0;
    }

    /**
     * The year of the beginning of military service.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#military
     *
     * @return int
     */
    public function from(): int
    {
        return $this->from ?? 0;
    }

    /**
     * The year of completion of military service.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#military
     *
     * @return int
     */
    public function until(): int
    {
        return $this->until ?? 0;
    }
}
