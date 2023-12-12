<?php

namespace Hopex\VkSdk\Formatters;

use Hopex\VkSdk\Contracts\CanFormatContract;
use Hopex\VkSdk\Exceptions\Formatters\InvalidInputDataTypeException;

/**
 * SourceDataFormatter.
 *
 * @package Hopex\VkSdk\Formatters
 */
class SourceDataFormatter implements CanFormatContract
{
    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param $data
     *
     * @throws InvalidInputDataTypeException
     *
     * @return string
     */
    public function format($data): string
    {
        if (!is_string($data)) {
            throw new InvalidInputDataTypeException();
        }

        return preg_replace('~^#.*[\n\r]~m', '', $data);
    }
}
