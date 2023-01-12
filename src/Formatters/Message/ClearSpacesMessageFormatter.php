<?php

namespace Hopex\VkSdk\Formatters\Message;

use Hopex\VkSdk\Contracts\CanFormatContract;
use Hopex\VkSdk\Exceptions\Formatters\InvalidInputDataTypeException;

/**
 * Class ClearSpacesMessageFormatter
 * @package Hopex\VkSdk\Formatters\Message
 */
class ClearSpacesMessageFormatter implements CanFormatContract
{
    /**
     * @param $data
     * @return string
     * @throws InvalidInputDataTypeException
     */
    public function format($data): string
    {
        if (!is_string($data)) {
            throw new InvalidInputDataTypeException();
        }

        return trim(preg_replace('~\s{2,}~', ' ', $data));
    }
}
