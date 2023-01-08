<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\City;

use Hopex\VkSdk\Foundation\Core\Entities\Database\DatabaseCollection;

/**
 * Class CityFieldsCollection
 * @package Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\City
 */
class CityFieldsCollection extends DatabaseCollection
{
    /**
     * @var string
     */
    protected string $fieldType = CityField::class;
}
