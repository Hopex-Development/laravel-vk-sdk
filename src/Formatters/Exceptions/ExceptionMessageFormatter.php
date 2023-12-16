<?php

namespace Hopex\VkSdk\Formatters\Exceptions;

use Hopex\VkSdk\Contracts\CanFormatContract;

/**
 * Formatting of the exception message, which implements the substitution of input parameters into a template
 * located in the redefined property of the exception message.
 *
 * @package Hopex\VkSdk\Formatters\Exceptions
 */
class ExceptionMessageFormatter implements CanFormatContract
{
    /**
     * @inheritDoc
     */
    public function format(mixed $data): string
    {
        return sprintf(data_get($data, 'message'), ...data_get($data, 'arguments'));
    }
}
