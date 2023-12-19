<?php

namespace Hopex\VkSdk\Foundation\Core\Logging;

use Hopex\VkSdk\Facades\Config;
use Illuminate\Support\Facades\Log;
use Psr\Log\LoggerInterface;

/**
 * The basic logging class that defines its channel.
 *
 * @package Hopex\VkSdk\Foundation\Core\Logging
 */
abstract class Logging
{
    protected LoggerInterface $logger;

    /**
     * The basic logging class that defines its channel.
     *
     * @version SDK: 3
     *
     * @param string $channel The name of the channel.
     */
    public function __construct(string $channel)
    {
        $this->logger = Log::build(Config::logging()->channels()->getByName($channel));
    }
}
