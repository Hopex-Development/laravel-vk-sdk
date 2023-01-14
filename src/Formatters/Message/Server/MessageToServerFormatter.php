<?php

namespace Hopex\VkSdk\Formatters\Message\Server;

use Hopex\VkSdk\Contracts\CanFormatContract;
use Hopex\VkSdk\Exceptions\Formatters\InvalidInputDataTypeException;
use Hopex\VkSdk\Facades\Note;

/**
 * Class MessageToServerFormatter
 * @package Hopex\VkSdk\Formatters\Message
 */
class MessageToServerFormatter implements CanFormatContract
{
    /**
     * @param $data
     * @return string
     * @throws InvalidInputDataTypeException
     */
    public function format($data): string
    {
        if (!is_array($data) || !isset($data['name'], $data['message'])) {
            throw new InvalidInputDataTypeException();
        }

        return str_replace([
            '%PLAYER%',
            '%MESSAGE%'
        ], [
            $data['name'],
            $data['message']
        ], Note::get('server.messages.to-server'));
    }
}
