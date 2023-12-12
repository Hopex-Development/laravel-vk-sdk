<?php

namespace Hopex\VkSdk\Foundation\Api\RequestBuilders;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;

/**
 * Simple request builder.
 *
 * @package Hopex\VkSdk\Foundation\Api\RequestBuilders
 */
abstract class SimpleRequestBuilder
{
    protected Collection $fields;

    public function __construct()
    {
        $this->fields = collect();
    }

    public function query(): static
    {
        return $this;
    }

    /**
     * Adds a parameter to the request body.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
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
}
