<?php

namespace Hopex\VkSdk\Foundation\Core\Configuration\Models\Logging;

use Hopex\VkSdk\Foundation\Core\Configuration\Collections\LogChannels;
use Hopex\VkSdk\Foundation\Core\Configuration\Models\Model;

/**
 * Logging configuration model.
 *
 * @package Hopex\VkSdk\Foundation\Core\Configuration\Models\Logging
 *
 * @property bool $enabled
 */
class Log extends Model
{
    /**
     * Whether logging is enabled.
     *
     * @version SDK: 3
     *
     * @return bool
     */
    public function enabled(): bool
    {
        return $this->enabled ?? false;
    }

    /**
     * Available channels that are used for logging.
     *
     * @version SDK: 3
     *
     * @return LogChannels
     */
    public function channels(): LogChannels
    {
        return new LogChannels();
    }
}