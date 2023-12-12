<?php

namespace Hopex\VkSdk\Formatters\Request;

use Hopex\VkSdk\Contracts\CanFormatContract;

/**
 * ArrayParametersRequestFormatter.
 *
 * @package Hopex\VkSdk\Formatters\Request
 */
class ArrayParametersRequestFormatter implements CanFormatContract
{
    /**
     * format.
     *
     * @version 0.0.0
     *
     * @param $data
     *
     * @return mixed
     */
    public function format($data): mixed
    {
        if (is_array($data)) {
            foreach ($data as $key => $value) {
                if (is_array($value)) {
                    $data[$key] = implode(',', $value);
                } elseif (is_bool($value)) {
                    $data[$key] = (string)$value;
                }
            }
        }
        return $data;
    }
}
