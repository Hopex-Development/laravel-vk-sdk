<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Faculty;

use Hopex\VkSdk\Foundation\Core\Entities\Database\DatabaseCollection;

/**
 * Class FacultyFieldsCollection
 * @package Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Faculty
 */
class FacultyFieldsCollection extends DatabaseCollection
{
    /**
     * @var string
     */
    protected string $fieldType = FacultyField::class;
}
