<?php

namespace Hopex\VkSdk\Formatters\Exceptions;

use Hopex\VkSdk\Contracts\CanFormatContract;

/**
 * Converts the exception message to JSON format.
 *
 * @package Hopex\VkSdk\Formatters\Exceptions
 */
class JsonExceptionFormatter implements CanFormatContract
{
    /**
     * @inheritdoc
     */
    public function format($data): array
    {
        return [
            'type' => 'error',
            'message' => $data
        ];
    }
}
