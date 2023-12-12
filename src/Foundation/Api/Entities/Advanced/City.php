<?php

namespace Hopex\VkSdk\Foundation\Api\Entities\Advanced;

use Hopex\VkSdk\Foundation\Api\Entities\Entity;

/**
 * Information about the city indicated on the user's page in the section "Contacts".
 *
 * @package Hopex\VkSdk\Foundation\Api\Entities\Advanced
 *
 * @link    https://dev.vk.com/en/reference/objects/user#city
 *
 * @property-read string $title
 * @property-read int $id
 */
class City extends Entity
{
    /**
     * City ID, which can be used to get its name using the method
     * {@see https://dev.vk.com/en/database.getCitiesById database.getCitiesById}
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#city
     *
     * @return int
     */
    public function id(): int
    {
        return $this->id ?? 0;
    }

    /**
     * The name of the city.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#city
     *
     * @return string
     */
    public function title(): string
    {
        return $this->title ?? '';
    }
}
