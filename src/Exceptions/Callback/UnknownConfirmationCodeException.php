<?php

namespace Hopex\VkSdk\Exceptions\Callback;

use Hopex\VkSdk\Exceptions\SdkException;

/**
 * Unknown confirmation code exception.
 *
 * @package Hopex\VkSdk\Exceptions\Callback
 */
class UnknownConfirmationCodeException extends SdkException
{
    public $message = 'Confirmation code is empty or not be found in group with id [%s]';

    /**
     * Unknown confirmation code exception.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param int|string $groupId
     */
    public function __construct(int|string $groupId)
    {
        parent::__construct($this->format($groupId));
    }
}
