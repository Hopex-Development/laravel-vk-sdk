<?php

namespace Hopex\VkSdk\Foundation\Core\Configuration\Models;

use Hopex\VkSdk\Foundation\Core\Enums\Language;

/**
 * Api configuration model.
 *
 * @package Hopex\VkSdk\Foundation\Core\Configuration\Models
 *
 * @property-read Language|string $lang
 * @property-read float           $version
 */
class Api extends Model
{
    /**
     * The version of the API that is used when sending requests.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return string|null
     */
    public function version(): ?string
    {
        return $this->version;
    }

    /**
     * The language in which the VK API returns the requested data.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return string|null
     */
    public function language(): ?string
    {
        $language = $this->lang ?? config('app.locale');

        return $language instanceof Language ? $language->value : $language;
    }
}
