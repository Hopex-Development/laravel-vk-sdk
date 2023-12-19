<?php

namespace Hopex\VkSdk\Foundation\Api\Entities\Advanced;

use Hopex\VkSdk\Foundation\Api\Entities\AbstractEntity;
use Illuminate\Support\Carbon;

/**
 * Time of last visit.
 *
 * @package Hopex\VkSdk\Foundation\Api\Entities\Advanced
 *
 * @link    https://dev.vk.com/en/reference/objects/user#last_seen
 *
 * @property-read int $time
 * @property-read int $platform
 */
class LastSeen extends AbstractEntity
{
    /**
     * Type of platform.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#last_seen
     *
     * @return string
     */
    public function platform(): string
    {
        return match ($this->platformId()) {
            1 => 'The mobile version',
            2 => 'Application for iPhone',
            3 => 'App for iPad',
            4 => 'Application for Android',
            5 => 'Application for Windows Phone',
            6 => 'Application for Windows 10',
            7 => 'Full version of the site',
            default => 'Unknown',
        };
    }

    /**
     * Type ID of platform.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#last_seen
     *
     * @return int
     */
    public function platformId(): int
    {
        return $this->platform;
    }

    /**
     * Time of last visit in Unix time format represented as a Carbon object.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/user#last_seen
     *
     * @return Carbon
     */
    public function time(): Carbon
    {
        return (new Carbon($this->time ?? 0))->setTimezone(config('app.timezone'));
    }
}
