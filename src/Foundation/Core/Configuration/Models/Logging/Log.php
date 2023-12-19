<?php

namespace Hopex\VkSdk\Foundation\Core\Configuration\Models\Logging;

use Hopex\VkSdk\Foundation\Core\Configuration\Collections\LogChannels;
use Hopex\VkSdk\Foundation\Core\Configuration\Models\AbstractModel;

/**
 * Logging configuration model.
 *
 * @package Hopex\VkSdk\Foundation\Core\Configuration\Models\Logging
 *
 * @property bool $tracing
 */
class Log extends AbstractModel
{
    /**
     * Enable or disable tracing.
     *
     * @version SDK: 3
     *
     * @return bool
     */
    public function tracing(): bool
    {
        return $this->tracing ?? false;
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