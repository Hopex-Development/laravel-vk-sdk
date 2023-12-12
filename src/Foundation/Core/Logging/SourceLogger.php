<?php

namespace Hopex\VkSdk\Foundation\Core\Logging;

/**
 * SourceLogging.
 *
 * @package Hopex\VkSdk\Foundation\Core\Logging
 */
class SourceLogger extends Logging
{
    public function __construct()
    {
        parent::__construct('source');
    }
}
