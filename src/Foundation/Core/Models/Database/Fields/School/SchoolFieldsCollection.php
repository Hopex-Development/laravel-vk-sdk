<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Database\Fields\School;

use Hopex\VkSdk\Foundation\Core\Models\Database\DatabaseCollection;

/**
 * Class SchoolFieldsCollection
 * @package Hopex\VkSdk\Foundation\Core\Models\Database\Fields\City
 */
class SchoolFieldsCollection extends DatabaseCollection
{
    /**
     * @var string
     */
    protected string $fieldType = SchoolField::class;
}
