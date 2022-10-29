<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Database\Fields\School\SchoolClasses;

use Hopex\VkSdk\Foundation\Core\Models\Database\DatabaseCollection;
use Illuminate\Support\Collection;

/**
 * Class SchoolClassFieldsCollection
 * @package Hopex\VkSdk\Foundation\Core\Models\Database\Fields\SchoolClasses
 */
class SchoolClassFieldsCollection extends DatabaseCollection
{
    /**
     * @var string
     */
    protected string $fieldType = SchoolClassField::class;

    /**
     * SchoolClassFieldsCollection constructor.
     * @param array|Collection $schoolClassesCollection
     */
    public function __construct(array|Collection $schoolClassesCollection)
    {
        $blocks = $schoolClassesCollection instanceof Collection ? $schoolClassesCollection : collect($schoolClassesCollection);
        parent::__construct(collect([
            'count' => count($blocks),
            'items' => $blocks
        ]));
    }
}
