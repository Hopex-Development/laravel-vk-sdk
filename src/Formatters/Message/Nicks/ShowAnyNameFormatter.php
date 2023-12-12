<?php

namespace Hopex\VkSdk\Formatters\Message\Nicks;

use Hopex\VkSdk\Contracts\CanFormatContract;
use Hopex\VkSdk\Exceptions\Formatters\InvalidInputDataTypeException;
use Hopex\VkSdk\Facades\Note;
use Hopex\VkSdk\Models\Player;

/**
 * Class ShowAnyNameFormatter
 * @package Hopex\VkSdk\Formatters\PrivateMessage
 */
class ShowAnyNameFormatter implements CanFormatContract
{
    /**
     * @param $data
     * @return string
     * @throws InvalidInputDataTypeException
     */
    public function format($data): string
    {
        if (
            !is_array($data) ||
            !isset($data['id'], $data['name'], $data['player']) ||
            !$data['player'] instanceof Player
        ) {
            throw new InvalidInputDataTypeException();
        }

        return str_replace([
            '%ID%',
            '%NAME%',
            '%NICK%'
        ], [
            $data['id'],
            $data['name'],
            $data['player']->nick
        ], Note::get('server.nicks.show'));
    }
}
