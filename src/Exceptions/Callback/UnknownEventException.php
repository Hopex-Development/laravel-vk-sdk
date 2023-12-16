<?php

namespace Hopex\VkSdk\Exceptions\Callback;

use Hopex\VkSdk\Exceptions\SdkException;

/**
 * Unknown event exception.
 *
 * @package Hopex\VkSdk\Exceptions\Callback
 */
class UnknownEventException extends SdkException
{
    /**
     * @inheritdoc
     */
    public $message = 'The event cannot be processed because the [%s] method is not implemented';

    /**
     * Unknown event exception.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param string $eventName The name of the event.
     */
    public function __construct(string $eventName)
    {
        parent::__construct($this->format($eventName));
    }
}
