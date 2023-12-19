<?php

namespace Hopex\VkSdk\Foundation\Api\Entities\Advanced;

use Hopex\VkSdk\Foundation\Api\Entities\AbstractEntity;

/**
 * Language.
 *
 * @package Hopex\VkSdk\Foundation\Api\Entities\Advanced
 * @link    https://dev.vk.com/en/reference/objects/user#personal
 *
 * @property-read string $nativeName
 * @property-read int    $id
 */
class Language extends AbstractEntity
{
    /**
     * ID of the language.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#personal
     *
     * @return int
     */
    public function id(): int
    {
        return $this->id;
    }

    /**
     * Name of the language.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#personal
     *
     * @return string
     */
    public function nativeName(): string
    {
        return $this->nativeName;
    }
}
