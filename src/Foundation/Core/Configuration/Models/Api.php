<?php

namespace Hopex\VkSdk\Foundation\Core\Configuration\Models;

use Hopex\VkSdk\Foundation\Core\Enums\Language;

/**
 * Api.
 *
 * @package Hopex\VkSdk\Foundation\Core\Configuration\Models
 *
 * @property-read \Hopex\VkSdk\Foundation\Core\Enums\Language|string $lang
 * @property-read float                                              $version
 */
class Api extends Model
{
    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        $language = $this->lang ?? config('app.locale');

        return $language instanceof Language ? $language->value : $language;
    }
}
