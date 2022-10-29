<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Database\Fields\Chair;

use Hopex\VkSdk\Foundation\Core\Models\Database\DatabaseCollection;

/**
 * Class ChairFieldsCollection
 * @package Hopex\VkSdk\Foundation\Core\Models\Database\Fields\Chair
 */
class ChairFieldsCollection extends DatabaseCollection
{
    /**
     * @var string
     */
    protected string $fieldType = ChairField::class;
}
