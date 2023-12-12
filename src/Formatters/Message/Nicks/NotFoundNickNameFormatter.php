<?php

namespace Hopex\VkSdk\Formatters\Message\Nicks;

use Hopex\VkSdk\Contracts\CanFormatContract;
use Hopex\VkSdk\Exceptions\Formatters\InvalidInputDataTypeException;
use Hopex\VkSdk\Facades\Note;

/**
 * Class NotFoundNickNameFormatter
 * @package Hopex\VkSdk\Formatters\PrivateMessage
 */
class NotFoundNickNameFormatter implements CanFormatContract
{
    /**
     * @param $data
     * @return string
     * @throws InvalidInputDataTypeException
     */
    public function format($data): string
    {
        if (!is_array($data) || !isset($data['id'], $data['name'])) {
            throw new InvalidInputDataTypeException();
        }

        return str_replace([
            '%ID%',
            '%NAME%'
        ], [
            $data['id'],
            $data['name']
        ], Note::get('server.nicks.not-found'));
    }
}
