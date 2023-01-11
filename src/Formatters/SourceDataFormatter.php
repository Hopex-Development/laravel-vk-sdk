<?php

namespace Hopex\VkSdk\Formatters;

use Hopex\VkSdk\Contracts\CanFormatContract;
use Hopex\VkSdk\Exceptions\Formatters\InvalidInputDataTypeException;

/**
 * Class SourceDataFormatter
 * @package Hopex\VkSdk\Formatters
 */
class SourceDataFormatter implements CanFormatContract
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

        return preg_replace('~^#.*[\n\r]~m', '', $data);
    }
}
