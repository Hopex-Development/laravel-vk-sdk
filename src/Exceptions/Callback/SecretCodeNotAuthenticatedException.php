<?php

namespace Hopex\VkSdk\Exceptions\Callback;

use Hopex\VkSdk\Exceptions\Exception;

/**
 * Secret code not authenticated exception.
 *
 * @package Hopex\VkSdk\Exceptions\Callback
 */
class SecretCodeNotAuthenticatedException extends Exception
{
    /**
     * {@inheritdoc}
     */
    public $message = "The secret code of the event [%s] doesn't match with configuration secret code [%s].";

    /**
     * Secret code not authenticated exception.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param string $eventCode Secret code in the event.
     * @param string $configurationCode Secret code in the configuration.
     */
    public function __construct(string $eventCode, string $configurationCode)
    {
        parent::__construct($this->format($eventCode, $configurationCode));
    }
}
