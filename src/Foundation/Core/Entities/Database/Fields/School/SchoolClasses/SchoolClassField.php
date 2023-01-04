<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\School\SchoolClasses;

use Hopex\VkSdk\Foundation\Core\Entities\Database\DatabaseField;
use Illuminate\Support\Collection;

/**
 * Class SchoolClassField
 * @package Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\SchoolClasses
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
