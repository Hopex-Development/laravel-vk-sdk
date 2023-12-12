<?php

namespace Hopex\VkSdk\Foundation\Core\Configuration\Models;

/**
 * Model.
 *
 * @package Hopex\VkSdk\Foundation\Core\Configuration\Models
 */
abstract class Model
{
    protected array $fields;

    /**
     * Model.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param array $fields
     */
    final public function __construct(array $fields)
    {
        $this->fields = $fields;
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param string $name
     *
     * @return array|mixed
     */
    public function __get(string $name)
    {
        return data_get($this->fields, snake($name));
    }
}
