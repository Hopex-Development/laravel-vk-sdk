<?php

namespace Hopex\VkSdk\Foundation\Core\Logging;

use Illuminate\Support\Facades\Log;
use Psr\Log\LoggerInterface;
use Hopex\VkSdk\Facades\Config;

/**
 * Logging.
 *
 * @package Hopex\VkSdk\Foundation\Core\Logging
 */
abstract class Logging
{
    protected LoggerInterface $logger;

    /**
     * HasLogging.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param string $channel
     */
    public function __construct(string $channel)
    {
        $this->logger = Log::build(Config::logging()->channels()->getByName($channel));
    }
}
