<?php

namespace Hopex\VkSdk\Formatters\Request;

use Hopex\VkSdk\Contracts\CanFormatContract;

/**
 * Class ClearEmptiesParametersRequestFormatter
 * @package Hopex\VkSdk\Formatters\Request
 */
class ClearEmptiesParametersRequestFormatter implements CanFormatContract
{
    /**
     * @param $data
     * @return array
     */
    public function format($data): array
    {
        return collect($data)
            ->filter(function ($item) {
                return !empty($item);
            })
            ->toArray();
    }
}
