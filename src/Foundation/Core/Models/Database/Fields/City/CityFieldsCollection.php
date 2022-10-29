<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Database\Fields\City;

use Hopex\VkSdk\Foundation\Core\Models\Database\DatabaseCollection;

/**
 * Class CityFieldsCollection
 * @package Hopex\VkSdk\Foundation\Core\Models\Database\Fields\City
 */
class CityFieldsCollection extends DatabaseCollection
{
    /**
     * @var string
     */
    protected string $fieldType = CityField::class;
}
