<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Database\Fields\Faculty;

use Hopex\VkSdk\Foundation\Core\Models\Database\DatabaseCollection;

/**
 * Class FacultyFieldsCollection
 * @package Hopex\VkSdk\Foundation\Core\Models\Database\Fields\Faculty
 */
class FacultyFieldsCollection extends DatabaseCollection
{
    /**
     * @var string
     */
    protected string $fieldType = FacultyField::class;
}
