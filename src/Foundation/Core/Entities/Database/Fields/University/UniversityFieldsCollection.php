<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\University;

use Hopex\VkSdk\Foundation\Core\Entities\Database\DatabaseCollection;
use Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\UniversityField\UniversityField;

/**
 * Class UniversityFieldsCollection
 * @package Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Region
 */
class UniversityFieldsCollection extends DatabaseCollection
{
    /**
     * @var string
     */
    protected string $fieldType = UniversityField::class;
}
