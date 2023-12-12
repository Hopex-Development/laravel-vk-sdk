<?php

namespace Hopex\VkSdk\Foundation\Core\Configuration\Models\Logging;

use Hopex\VkSdk\Foundation\Core\Configuration\Collections\LogChannels;
use Hopex\VkSdk\Foundation\Core\Configuration\Models\Model;

/**
 * Log.
 *
 * @package Hopex\VkSdk\Foundation\Core\Configuration\Models\Logging
 *
 * @property bool $enabled
 */
class Log extends Model
{
    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return bool
     */
    public function enabled(): bool
    {
        return $this->enabled ?? false;
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return LogChannels
     */
    public function channels(): LogChannels
    {
        return new LogChannels();
    }
}