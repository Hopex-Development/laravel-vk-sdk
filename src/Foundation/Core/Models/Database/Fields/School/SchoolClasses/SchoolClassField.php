<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Database\Fields\School\SchoolClasses;

use Hopex\VkSdk\Foundation\Core\Models\Database\DatabaseField;
use Illuminate\Support\Collection;

/**
 * Class SchoolClassField
 * @package Hopex\VkSdk\Foundation\Core\Models\Database\Fields\SchoolClasses
 */
class SchoolClassField extends DatabaseField
{
    /**
     * SchoolClassField constructor.
     * @param array|Collection $schoolClass
     */
    public function __construct(array|Collection $schoolClass)
    {
        $class = $schoolClass instanceof Collection ? $schoolClass : collect($schoolClass);
        parent::__construct(collect([
                'id' => $class->first(),
                'title' => $class->last()
            ])
        );
    }
}
