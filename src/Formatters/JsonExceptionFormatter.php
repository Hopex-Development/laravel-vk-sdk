<?php

namespace Hopex\VkSdk\Formatters;

use Hopex\VkSdk\Contracts\CanFormat;
use Hopex\VkSdk\Exceptions\SdkException;

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
            'message' => $data instanceof SdkException ? $data->getMessage() : $data
        ];
    }
}
