<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Country;

use Hopex\VkSdk\Foundation\Core\Entities\Database\DatabaseCollection;

/**
 * Class CountryFieldsCollection
 * @package Hopex\VkSdk\Foundation\Core\Entities\Database\Fields\Country
 */
class CountryFieldsCollection extends DatabaseCollection
{
    /**
     * @var string
     */
    protected string $fieldType = CountryField::class;
}
