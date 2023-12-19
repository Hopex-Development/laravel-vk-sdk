<?php

namespace Hopex\VkSdk\Foundation\Core\Configuration\Models;

/**
 * Implements the basic configuration model.
 *
 * @package Hopex\VkSdk\Foundation\Core\Configuration\Models
 */
abstract class AbstractModel
{
    /**
     * Fields of the config model.
     *
     * @version SDK: 3
     *
     * @var array
     */
    protected array $fields;

    /**
     * Implements the basic configuration model.
     *
     * @version SDK: 3
     *
     * @param array $fields Fields of the config model.
     */
    final public function __construct(array $fields)
    {
        $this->fields = $fields;
    }

    /**
     * Get the value of the field.
     *
     * @version SDK: 3
     *
     * @param string $name Name of the field.
     *
     * @return array|mixed
     */
    public function __get(string $name)
    {
        return data_get($this->fields, snake($name));
    }
}
