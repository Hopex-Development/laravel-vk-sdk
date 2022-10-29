<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Database\Fields\Country;

use Hopex\VkSdk\Foundation\Core\Models\Database\DatabaseCollection;

/**
 * Class CountryFieldsCollection
 * @package Hopex\VkSdk\Foundation\Core\Models\Database\Fields\Country
 */
class CountryFieldsCollection extends DatabaseCollection
{
    /**
     * @var string
     */
    protected string $fieldType = CountryField::class;
}
