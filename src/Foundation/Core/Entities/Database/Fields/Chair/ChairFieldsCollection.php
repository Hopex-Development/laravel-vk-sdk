<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Chair;

use Hopex\VkSdk\Foundation\Core\Entities\Database\DatabaseCollection;

/**
 * Class ChairFieldsCollection
 * @package Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Chair
 */
class ChairFieldsCollection extends DatabaseCollection
{
    /**
     * @var string
     */
    protected string $fieldType = ChairField::class;
}
