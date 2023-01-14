<?php

namespace Hopex\VkSdk\Formatters\Message\Nicks;

use Carbon\Carbon;
use Hopex\VkSdk\Contracts\CanFormatContract;
use Hopex\VkSdk\Exceptions\Formatters\InvalidInputDataTypeException;
use Hopex\VkSdk\Facades\Note;
use Hopex\VkSdk\Models\Player;

/**
 * Class NicksTableFormatter
 * @package Hopex\VkSdk\Formatters\Message\Nicks
 */
class NicksTableFormatter implements CanFormatContract
{
    /**
     * @param $data
     * @return string
     * @throws InvalidInputDataTypeException
     */
    public function format($data): string
    {
        if (!is_array($data) || !isset($data['players'], $data['pagination'])) {
            throw new InvalidInputDataTypeException();
        }

        return implode("\r\n", $data['players']) . "\r\n" . $data['pagination'];
    }
}
