<?php

namespace Hopex\VkSdk\Foundation\Core\Logging;

/**
 * The basic logging class for callback requests.
 *
 * @package Hopex\VkSdk\Foundation\Core\Logging
 */
class CallbackLogger extends AbstractLogger
{
    public function __construct()
    {
        parent::__construct('callback');
    }
}
