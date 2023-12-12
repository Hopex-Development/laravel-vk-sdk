<?php

namespace Hopex\VkSdk\Exceptions\Api;

/**
 * Access token not found exception.
 *
 * @package Hopex\VkSdk\Exceptions\Api
 */
class AccessTokenNotFoundException extends ApiException
{
    public $message = 'Access token for [%s] not found';

    /**
     * AccessTokenNotFoundException.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param string|null $acceptedTokenTypes
     */
    public function __construct(string $acceptedTokenTypes = null)
    {
        parent::__construct(message: $this->format($acceptedTokenTypes));
    }
}
