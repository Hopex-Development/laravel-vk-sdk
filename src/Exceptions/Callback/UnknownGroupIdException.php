<?php

namespace Hopex\VkSdk\Exceptions\Callback;

use Hopex\VkSdk\Exceptions\SdkException;

/**
 * Unknown group ID exception.
 *
 * @package Hopex\VkSdk\Exceptions\Callback
 */
class UnknownGroupIdException extends SdkException
{
    /**
     * @inheritdoc
     */
    public $message = 'Unknown community id [%d]';

    /**
     * Unknown group ID exception.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param int|string $groupId The group id.
     */
    public function __construct(int|string $groupId)
    {
        parent::__construct($this->format($groupId));
    }
}
