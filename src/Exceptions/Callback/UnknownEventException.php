<?php

namespace Hopex\VkSdk\Exceptions\Callback;

use Hopex\VkSdk\Exceptions\SdkException;

/**
 * Class UnknownEventException
 * @package Hopex\VkSdk\Exceptions\Callback
 */
class UnknownEventException extends SdkException
{
    public $message = 'The event cannot be processed because the [%s] method is not implemented';

    public function __construct(string $eventName)
    {
        parent::__construct($this->format($eventName));
    }
}
