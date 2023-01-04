<?php

namespace Hopex\VkSdk\Formatters;

use Hopex\VkSdk\Contracts\CanFormatContract;
use Hopex\VkSdk\Exceptions\SdkException;

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
