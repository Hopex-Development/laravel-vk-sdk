<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\School;

use Hopex\VkSdk\Foundation\Core\Entities\Database\DatabaseCollection;

/**
 * Class SchoolFieldsCollection
 * @package Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\City
 */
class SchoolFieldsCollection extends DatabaseCollection
{
    /**
     * @var string
     */
    protected string $fieldType = SchoolField::class;
}
