<?php

namespace Hopex\VkSdk\Foundation\Core\Logging;

use Hopex\VkSdk\Facades\SdkConfig;
use Illuminate\Support\Facades\Log;
use Psr\Log\LoggerInterface;

/**
 * Trait HasLogging
 * @package Hopex\VkSdk\Foundation\Core\Logging
 */
trait HasLogging
{
    protected LoggerInterface $logger;

    public function __construct(string $sdkChannel)
    {
        $this->logger = Log::build((array)SdkConfig::logging("channels.$sdkChannel"));
    }
}
