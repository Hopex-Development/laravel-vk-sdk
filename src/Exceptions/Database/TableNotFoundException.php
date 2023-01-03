<?php

namespace Hopex\VkSdk\Exceptions\Callback;

use Hopex\VkSdk\Exceptions\SdkException;
use Throwable;

/**
 * Class TableNotFoundException
 * @package Hopex\VkSdk\Exceptions\Callback
 */
class TableNotFoundException extends SdkException
{
    protected $message = 'Base table or view not found';
}
