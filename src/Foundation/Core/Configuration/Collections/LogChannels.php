<?php

namespace Hopex\VkSdk\Foundation\Core\Configuration\Collections;

use Hopex\VkSdk\Foundation\Core\Configuration\Models\Logging\LogChannel;

/**
 * Collection of the logging channels (their configurations).
 *
 * @method LogChannel[] all()
 *
 * @package Hopex\VkSdk\Foundation\Core\Configuration\Collections
 */
class LogChannels extends Collection
{
    /**
     * @inheritdoc
     */
    protected string $rootKey = 'logging.channels';

    /**
     * @inheritdoc
     */
    protected string $modelClass = LogChannel::class;

    /**
     * Get the logging channel by name.
     *
     * @version SDK: 3
     *
     * @param string $name Name of the logging channel.
     *
     * @return array
     */
    public function getByName(string $name): array
    {
        return data_get($this, $name, []);
    }
}
