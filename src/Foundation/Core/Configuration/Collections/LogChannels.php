<?php

namespace Hopex\VkSdk\Foundation\Core\Configuration\Collections;

use Hopex\VkSdk\Foundation\Core\Configuration\Models\Logging\LogChannel;

/**
 * Log channels.
 *
 * @method LogChannel[] all()
 *
 * @package Hopex\VkSdk\Foundation\Core\Configuration\Collections
 */
class LogChannels extends Collection
{
    protected string $rootKey = 'logging.channels';

    protected string $modelClass = LogChannel::class;

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param string $name
     *
     * @return array
     */
    public function getByName(string $name): array
    {
        return data_get($this, $name, []);
    }
}
