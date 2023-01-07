<?php

namespace Hopex\VkSdk\Exceptions\Callback;

use Hopex\VkSdk\Exceptions\SdkException;

/**
 * Class NoteException
 * @package Hopex\VkSdk\Exceptions\Callback
 */
class NoteException extends SdkException
{
    public $message = 'Target note source file not found';
}
