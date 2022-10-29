<?php

namespace Hopex\VkSdk\Exceptions\Callback;

use Hopex\VkSdk\Exceptions\SdkException;
use Throwable;

/**
 * Class CallbackException
 * @package Hopex\VkSdk\Exceptions\Callback
 */
class CallbackException extends SdkException
{
    /**
     * @param $message
     * @param $code
     * @param Throwable|null $previous
     */
    public function __construct($message, $code = 400, Throwable $previous = null)
    {
        $message = preg_replace('~vk-sdk\.~', '', __("vk-sdk.$message"));
        parent::__construct("CallbackException: $message", $code, $previous);
    }
}
