<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Region;

use Hopex\VkSdk\Foundation\Core\Entities\Database\DatabaseCollection;

/**
 * Class RegionFieldsCollection
 * @package Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\City
 */
class RegionFieldsCollection extends DatabaseCollection
{
    /**
     * @var string
     */
    protected string $fieldType = RegionField::class;
}
