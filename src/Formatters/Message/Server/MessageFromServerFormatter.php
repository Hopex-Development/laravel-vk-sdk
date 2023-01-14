<?php

namespace Hopex\VkSdk\Formatters\Message\Server;

use Hopex\VkSdk\Contracts\CanFormatContract;
use Hopex\VkSdk\Exceptions\Formatters\InvalidInputDataTypeException;
use Hopex\VkSdk\Facades\Note;
use Hopex\VkSdk\Foundation\Core\Entities\Server\Message;

/**
 * Class MessageFromServerFormatter
 * @package Hopex\VkSdk\Formatters\Message\Server
 */
class MessageFromServerFormatter implements CanFormatContract
{
    /**
     * @param $data
     * @return string
     * @throws InvalidInputDataTypeException
     */
    public function format($data): string
    {
        if (!$data instanceof Message) {
            throw new InvalidInputDataTypeException();
        }

        return str_replace([
            '%PLAYER%',
            '%MESSAGE%'
        ], [
            $data->getPlayer(),
            $data->getText()
        ], Note::get('server.messages.from-server'));
    }
}
