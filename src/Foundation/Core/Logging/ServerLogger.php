<?php

namespace Hopex\VkSdk\Foundation\Core\Logging;

/**
 * Class ServerLogger
 * @package Hopex\VkSdk\Foundation\Core\Logging
 */
class ServerLogger
{
    use HasLogging {
        HasLogging::__construct as loggingConstruct;
    }

    public function __construct()
    {
        $this->loggingConstruct('server');
    }
}
