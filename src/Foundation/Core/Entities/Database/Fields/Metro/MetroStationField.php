<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Metro;

use Hopex\VkSdk\Foundation\Core\Entities\Database\DatabaseField;

/**
 * Class MetroStationField
 * @package Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Metro
 */
class MetroStationField extends DatabaseField
{
    public const TITLE = 'name';
    public const COLOR = 'color';

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->currentField->get(self::COLOR);
    }
}
