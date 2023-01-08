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
     * @return array
     */
    public function format($data): array
    {
        $input = explode(' ', preg_replace("~((^\[.*\])?\s*\!*)|(^\s*\!*)~", '$1', $data));
        return array_merge([
            $input[0]
        ], [
            implode(' ', array_slice($input, 1, count($input)))
        ]);
    }
}
