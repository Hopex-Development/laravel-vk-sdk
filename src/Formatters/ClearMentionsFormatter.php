<?php

namespace Hopex\VkSdk\Formatters;

use Hopex\VkSdk\Contracts\CanFormatContract;
use Hopex\VkSdk\Exceptions\Formatters\InvalidInputDataTypeException;

/**
 * Class ClearMentionsFormatter
 * @package Hopex\VkSdk\Formatters
 */
class ClearMentionsFormatter implements CanFormatContract
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

        return preg_replace("~^(\[.*]\s)|(!)|(.*)~", '$3', $data);
    }
}
