<?php

namespace Hopex\VkSdk\Formatters;

use Hopex\VkSdk\Contracts\CanFormat;

class JsonExceptionFormatter implements CanFormat
{
    /**
     * @param $data
     * @return array
     */
    public function format($data): array
    {
        return [
            'type' => 'error',
            'message' => $data->getMessage()
        ];
    }
}
