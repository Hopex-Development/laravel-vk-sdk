<?php

namespace Hopex\VkSdk\Formatters\Message\Nicks;

use Hopex\VkSdk\Contracts\CanFormatContract;
use Hopex\VkSdk\Exceptions\Formatters\InvalidInputDataTypeException;
use Hopex\VkSdk\Facades\Note;

/**
 * Class EditNickNameFormatter
 * @package Hopex\VkSdk\Formatters\PrivateMessage
 */
class EditNickNameFormatter implements CanFormatContract
{
    /**
     * @param $data
     * @return string
     * @throws InvalidInputDataTypeException
     */
    public function format($data): string
    {
        if (!is_string($data)) {
            throw new InvalidInputDataTypeException();
        }

        return str_replace([
            '%NICK%'
        ], [
            $data
        ], Note::get('server.nicks.edit'));
    }
}
