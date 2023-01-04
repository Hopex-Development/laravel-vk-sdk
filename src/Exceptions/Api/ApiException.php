<?php

namespace Hopex\VkSdk\Exceptions\Api;

use Hopex\VkSdk\Exceptions\SdkException;

/**
 * Class ApiException
 * @package Hopex\VkSdk\Exceptions\Api
 */
class ApiException extends SdkException
{
    public $message = 'Unknown api exception';

    /**
     * @param int $code
     */
    public function __construct(int $code = 1)
    {
        $this->message = ApiExceptionMapper::parse($code) ?? $this->message;
        parent::__construct();
    }
}
