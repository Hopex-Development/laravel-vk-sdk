<?php

namespace Hopex\VkSdk\Exceptions\Callback;

use Hopex\VkSdk\Exceptions\SdkException;

/**
 * UnknownGroupIdException.
 *
 * @package Hopex\VkSdk\Exceptions\Callback
 */
class UnknownGroupIdException extends SdkException
{
    public $message = 'Unknown community id [%d]';

    /**
     * UnknownGroupIdException.
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
