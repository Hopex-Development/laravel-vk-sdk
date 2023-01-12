<?php

namespace Hopex\VkSdk\Foundation\Core\Logging;

/**
 * Class SourceLogger
 * @package Hopex\VkSdk\Foundation\Core\Logging
 */
class SourceLogger
{
    use HasLogging {
        HasLogging::__construct as loggingConstruct;
    }

    public function __construct()
    {
        $this->loggingConstruct('source');
    }
}
