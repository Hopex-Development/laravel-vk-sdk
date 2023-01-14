<?php

namespace Hopex\VkSdk\Formatters\Message\Nicks;

use Hopex\VkSdk\Contracts\CanFormatContract;
use Hopex\VkSdk\Exceptions\Formatters\InvalidInputDataTypeException;
use Hopex\VkSdk\Facades\Note;
use Hopex\VkSdk\Models\Player;

/**
 * Class SelfNickNameFormatter
 * @package Hopex\VkSdk\Formatters\Message
 */
class SelfNickNameFormatter implements CanFormatContract
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

        return str_replace([
            '%DATE%',
            '%NICK%'
        ], [
            $data->updated_at->translatedFormat('d M Y года в H:i'),
            $data->nick
        ], Note::get('server.nicks.self'));
    }
}
