<?php

namespace Hopex\VkSdk\Formatters;

use Hopex\VkSdk\Contracts\CanFormatContract;

/**
 * Class JsonExceptionFormatter
 * @package Hopex\VkSdk\Formatters
 */
class JsonExceptionFormatter implements CanFormatContract
{
    /**
     * @param $data
     * @return array
     */
    public function format($data): array
    {
        return [
            'type' => 'error',
            'message' => $data
        ];
    }
}
