<?php

namespace Hopex\VkSdk\Formatters\Message\Nicks;

use Carbon\Carbon;
use Hopex\VkSdk\Contracts\CanFormatContract;
use Hopex\VkSdk\Exceptions\Formatters\InvalidInputDataTypeException;
use Hopex\VkSdk\Models\Player;

/**
 * Class TableNickFormatter
 * @package Hopex\VkSdk\Formatters\PrivateMessage\Nicks
 */
class TableNickFormatter implements CanFormatContract
{
    /**
     * @param $data
     * @return string
     * @throws InvalidInputDataTypeException
     */
    public function format($data): string
    {
        if (!$data instanceof Player) {
            throw new InvalidInputDataTypeException();
        }

        return "$data->mention($data->nick) {$data
                    ->created_at
                    ->diff(Carbon::now())
                    ->format('(%dд. %hч.)')}";
    }
}
