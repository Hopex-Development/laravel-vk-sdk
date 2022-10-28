<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Database\Fields\Region;

use Hopex\VkSdk\Foundation\Core\Models\Database\DatabaseCollection;
use Hopex\VkSdk\Foundation\Core\Models\Database\Fields\UniversityField\UniversityField;

/**
 * Class UniversityFieldsCollection
 * @package Hopex\VkSdk\Foundation\Core\Models\Database\Fields\Region
 */
class UniversityFieldsCollection extends DatabaseCollection
{
    /**
     * @var string
     */
    protected string $fieldType = UniversityField::class;
}
