<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Metro;

use Hopex\VkSdk\Foundation\Core\Entities\Database\DatabaseCollection;

/**
 * Class MetroStationFieldsCollection
 * @package Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Metro
 */
class MetroStationFieldsCollection extends DatabaseCollection
{
    /**
     * @var string
     */
    protected string $fieldType = MetroStationField::class;
}
