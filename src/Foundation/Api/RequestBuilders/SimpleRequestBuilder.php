<?php

namespace Hopex\VkSdk\Foundation\Api\RequestBuilders;

use Illuminate\Support\Collection;

/**
 * Implements the basic functionality of builders.
 *
 * @package Hopex\VkSdk\Foundation\Api\RequestBuilders
 */
abstract class SimpleRequestBuilder
{
    /**
     * Dynamic fields used to build the query.
     *
     * @version SDK: 3
     *
     * @var Collection
     */
    protected Collection $fields;

    /**
     * Implements the basic functionality of builders.
     *
     * @see RequestBuilder
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     */
    public function __construct()
    {
        $this->fields = collect();
    }

    /**
     * Returns the current instance of the builder, used for facades.
     *
     * @version SDK: 3
     *
     * @return $this
     */
    public function query(): static
    {
        return $this;
    }

    /**
     * Adds a parameter to the request body.
     *
     * @version SDK: 3
     *
     * @param string|array $fields A string parameter or a two-dimensional array with a single key.
     *
     * @return $this
     */
    final protected function addField(string|array $fields): static
    {
        $fieldNameSnake = snake(is_array($fields) ? array_keys($fields)[0] ?? '' : $fields);
        $fieldNameCamel = camel($fieldNameSnake);

        if (!empty($fieldNameSnake) && !$this->fields->has($fieldNameSnake)) {
            if (is_array($fields)) {
                $this->fields->put(
                    $fieldNameSnake,
                    is_array($fields[$fieldNameCamel])
                        ? implode(',', $fields[$fieldNameCamel])
                        : (string)$fields[$fieldNameCamel]
                );
            } else {
                $this->fields->push($fieldNameSnake);
            }
        }

        return $this;
    }

    /**
     * Clears all fields. Use this method to reset the builder to its initial state.
     *
     * @version SDK: 3
     *
     * @return $this
     */
    final public function clearFields(): static
    {
        $this->fields = collect();

        return $this;
    }
}
