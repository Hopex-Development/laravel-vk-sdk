<?php

namespace Hopex\VkSdk\Formatters\Message;

use Hopex\VkSdk\Contracts\CanFormatContract;
use Hopex\VkSdk\Exceptions\Formatters\InvalidInputDataTypeException;

/**
 * Class SliceInputMessageFormatter
 * @package Hopex\VkSdk\Formatters\PrivateMessage
 */
class SliceInputMessageFormatter implements CanFormatContract
{
    /**
     * @param $data
     * @return string
     * @throws InvalidInputDataTypeException
     */
    public function format($data): array
    {
        if (!is_string($data)) {
            throw new InvalidInputDataTypeException();
        }

        $exploded = explode(' ', $data);
        return [
            'command' => $exploded[0],
            'payload' => implode(' ', array_slice($exploded, 1, count($exploded)))
        ];
    }
}
