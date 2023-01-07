<?php

namespace Hopex\VkSdk\Exceptions\SourceQuery;

use Hopex\VkSdk\Exceptions\SdkException;

/**
 * Class InvalidPacketSourceQueryException
 * @package Hopex\VkSdk\Exceptions\SourceQuery
 */
class InvalidPacketSourceQueryException extends SdkException
{
    public $message = 'Invalid SourceQuery packet';
}
