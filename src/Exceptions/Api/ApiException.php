<?php

namespace Hopex\VkSdk\Exceptions\Api;

use Hopex\VkSdk\Exceptions\SdkException;

/**
 * Api exception.
 *
 * @package Hopex\VkSdk\Exceptions\Api
 */
class ApiException extends SdkException
{
    /**
     * @inheritdoc
     */
    public $message = 'Unknown VK API exception';

    /**
     * Api exception.
     *
     * @param int         $code The error code.
     * @param string|null $message The error message.
     */
    public function __construct(int $code = 1, string $message = null)
    {
        $this->message = $message ?? ApiExceptionMapper::parse($code) ?? $this->message;
        parent::__construct();
    }
}
