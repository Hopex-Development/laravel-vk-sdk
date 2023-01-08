<?php

namespace Hopex\VkSdk\Exceptions\SourceQuery;

use Hopex\VkSdk\Exceptions\SdkException;

/**
 * Class InvalidArgumentSourceQueryException
 * @package Hopex\VkSdk\Exceptions\SourceQuery
 */
class InvalidArgumentSourceQueryException extends SdkException
{
    public $message = 'Invalid SourceQuery argument';
}
