<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Database\Fields\Metro;

use Hopex\VkSdk\Foundation\Core\Models\Database\DatabaseCollection;

/**
 * Class MetroStationFieldsCollection
 * @package Hopex\VkSdk\Foundation\Core\Models\Database\Fields\Metro
 */
class MetroStationFieldsCollection extends DatabaseCollection
{
    /**
     * @var string
     */
    protected string $fieldType = MetroStationField::class;
}
