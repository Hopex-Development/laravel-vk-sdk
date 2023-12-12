<?php

namespace Hopex\VkSdk\Formatters\Request;

use Hopex\VkSdk\Contracts\CanFormatContract;

/**
 * ClearEmptiesParametersRequestFormatter.
 *
 * @package Hopex\VkSdk\Formatters\Request
 */
class ClearEmptiesParametersRequestFormatter implements CanFormatContract
{
    /**
     * format.
     *
     * @version 0.0.0
     *
     * @param $data
     *
     * @return array
     */
    public function format($data): array
    {
        return collect($data)->filter(fn ($item) => !empty($item))->toArray();
    }
}
