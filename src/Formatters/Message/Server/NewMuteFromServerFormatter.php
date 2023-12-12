<?php

namespace Hopex\VkSdk\Formatters\Message\Server;

use Hopex\VkSdk\Contracts\CanFormatContract;
use Hopex\VkSdk\Exceptions\Formatters\InvalidInputDataTypeException;
use Hopex\VkSdk\Facades\Note;
use Hopex\VkSdk\Foundation\Core\Entities\Server\Mute;

/**
 * Class NewMuteFromServerFormatter
 * @package Hopex\VkSdk\Formatters\PrivateMessage\Server
 */
class NewMuteFromServerFormatter implements CanFormatContract
{
    /**
     * @param $data
     * @return string
     * @throws InvalidInputDataTypeException
     */
    public function format($data): string
    {
        if (!$data instanceof Mute) {
            throw new InvalidInputDataTypeException();
        }

        return str_replace([
            '%ADMIN%',
            '%PLAYER%',
            '%REASON%',
            '%TIME%'
        ], [
            $data->getAdminName(),
            $data->getPlayerName(),
            $data->getReason(),
            $data->getTime()->format('H:i:s'),
        ], Note::get('server.blocks.mute'));
    }
}
