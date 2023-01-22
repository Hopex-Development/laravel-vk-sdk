<?php

namespace Hopex\VkSdk\Exceptions\Callback;

use Hopex\VkSdk\Exceptions\SdkException;

/**
 * Class TokenPermissionsException
 * @package Hopex\VkSdk\Exceptions\Callback
 */
class TokenPermissionsException extends SdkException
{
    public $message = 'The token does not have the necessary permissions';
}
