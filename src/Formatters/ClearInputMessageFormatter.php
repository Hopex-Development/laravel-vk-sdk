<?php

namespace Hopex\VkSdk\Formatters;

use Hopex\VkSdk\Contracts\CanFormatContract;

/**
 * Class ClearInputMessageFormatter
 * @package Hopex\VkSdk\Formatters
 */
class ClearInputMessageFormatter implements CanFormatContract
{
    /**
     * @param $data
     * @return string
     */
    public function format($data): string
    {
        return explode(' ', preg_replace("~((^\[.*\])?\s*\!*)|(^\s*\!*)~", '', $data))[0];
    }
}
