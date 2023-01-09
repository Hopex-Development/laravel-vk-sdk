<?php

namespace Hopex\VkSdk\Exceptions\Formatters;

use Hopex\VkSdk\Exceptions\SdkException;

class InvalidInputDataTypeException extends SdkException
{
    public $message = 'Invalid input data type';
}
