<?php

namespace Hopex\VkSdk\Exceptions\Formatters;

use Hopex\VkSdk\Exceptions\Exception;

/**
 * Invalid input data type exception.
 *
 * @package Hopex\VkSdk\Exceptions\Formatters
 */
class InvalidInputDataTypeException extends Exception
{
    /**
     * {@inheritdoc}
     */
    public $message = 'Invalid input data type';
}
