<?php

namespace Hopex\VkSdk\Formatters;

use Hopex\VkSdk\Contracts\CanFormat;
use Hopex\VkSdk\Exceptions\SdkException;

/**
 * Class ClearEmptiesParametersRequestFormatter
 * @package Hopex\VkSdk\Formatters
 */
class ClearEmptiesParametersRequestFormatter implements CanFormat
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
