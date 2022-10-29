<?php

namespace Hopex\VkSdk\Exceptions\Callback;

/**
 * Class UndefinedEventException
 * @package Hopex\VkSdk\Exceptions\Callback
 */
class UnknownEventException extends CallbackException
{
    public function __construct()
    {
        parent::__construct("Unknown callback event", 403);
    }
}
