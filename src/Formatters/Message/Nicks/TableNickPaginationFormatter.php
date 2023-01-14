<?php

namespace Hopex\VkSdk\Formatters\Message\Nicks;

use Carbon\Carbon;
use Hopex\VkSdk\Contracts\CanFormatContract;
use Hopex\VkSdk\Exceptions\Formatters\InvalidInputDataTypeException;
use Hopex\VkSdk\Facades\Note;
use Hopex\VkSdk\Models\Player;

/**
 * Class TableNickPaginationFormatter
 * @package Hopex\VkSdk\Formatters\Message\Nicks
 */
class TableNickPaginationFormatter implements CanFormatContract
{
    /**
     * @param $data
     * @return string
     * @throws InvalidInputDataTypeException
     */
    public function format($data): string
    {
        if (!is_array($data) || !isset($data['current'], $data['total'])) {
            throw new InvalidInputDataTypeException();
        }

        return str_replace([
            '%CURRENT%',
            '%TOTAL%',
        ], [
            $data['current'],
            $data['total']
        ], Note::get('group.nicks-pagination'));
    }
}
