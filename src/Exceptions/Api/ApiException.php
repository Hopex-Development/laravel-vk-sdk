<?php

namespace Hopex\VkSdk\Exceptions\Api;

use Hopex\VkSdk\Exceptions\SdkException;
use Throwable;

/**
 * Class ApiException
 * @package Hopex\VkSdk\Exceptions\Api
 */
class ApiException extends SdkException
{
    /**
     * ApiException constructor.
     *
     * @param $message
     * @param $code
     * @param Throwable|null $previous
     */
    public function __construct($message = null, $code = 400, Throwable $previous = null)
    {
        $commonError = ApiExceptionMapper::parse($code);
        if ($commonError) {
            $code = 400;
            $message = $commonError;
        }
        $message = preg_replace('~vk-sdk\.~', '', __("vk-sdk.$message"));
        parent::__construct("ApiException: $message", $code, $previous);
    }
}
