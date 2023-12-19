<?php

namespace Hopex\VkSdk\Foundation\Core\Logging;

/**
 * The basic logging class for application resources.
 *
 * @package Hopex\VkSdk\Foundation\Core\Logging
 */
class SourceLogger extends Logging
{
    /**
     * The basic logging class for application resources.
     */
    public function __construct()
    {
        parent::__construct('source');
    }
}
