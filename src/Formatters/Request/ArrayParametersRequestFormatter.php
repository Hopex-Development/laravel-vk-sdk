<?php

namespace Hopex\VkSdk\Formatters\Request;

use Hopex\VkSdk\Contracts\CanFormatContract;

/**
 * Class ArrayParametersRequestFormatter
 * @package Hopex\VkSdk\Formatters\Request
 */
class ArrayParametersRequestFormatter implements CanFormatContract
{
    /**
     * @param $data
     * @return mixed
     */
    public function format($data): mixed
    {
        if (is_array($data)) {
            foreach ($data as $key => $value) {
                if (is_array($value)) {
                    $data[$key] = implode(',', $value);
                } else if (is_bool($value)) {
                    $data[$key] = $value ? 1 : 0;
                }
            }
        }
        return $data;
    }
}
