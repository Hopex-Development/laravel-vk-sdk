<?php

namespace Hopex\VkSdk\Foundation\Api\Entities\Advanced;

use Hopex\VkSdk\Foundation\Api\Entities\AbstractEntity;

/**
 * Information about the country indicated on the user's page in the section "Contacts".
 *
 * @package Hopex\VkSdk\Foundation\Api\Entities\Advanced
 *
 * @link    https://dev.vk.com/en/reference/objects/user#country
 *
 * @property-read int    $id
 * @property-read string $title
 */
class Country extends AbstractEntity
{
    /**
     * Country identifier that can be used to get its name using the method
     * {@see https://dev.vk.com/en/database.getCountriesById database.getCountriesById};
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#country
     *
     * @return int
     */
    public function id(): int
    {
        return $this->id ?? 0;
    }

    /**
     * The name of the country.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#country
     *
     * @return string
     */
    public function title(): string
    {
        return $this->title ?? '';
    }
}
