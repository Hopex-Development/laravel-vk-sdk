<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Database\Fields\Region;

use Hopex\VkSdk\Foundation\Core\Models\Database\DatabaseCollection;

/**
 * Class RegionFieldsCollection
 * @package Hopex\VkSdk\Foundation\Core\Models\Database\Fields\City
 */
class RegionFieldsCollection extends DatabaseCollection
{
    /**
     * @var string
     */
    protected string $fieldType = RegionField::class;
}
