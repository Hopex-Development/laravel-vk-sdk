<?php

namespace Hopex\VkSdk\Foundation\Api\Entities;

use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Support\Str;
use JsonSerializable;

/**
 * Base entity.
 *
 * @package Hopex\VkSdk\Foundation\Api\Entities
 *
 * @property-read int $entityVersion
 */
abstract class Entity implements JsonSerializable, Jsonable
{
    private array $fields;

    /**
     * Base entity.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param array|object $fields
     */
    public function __construct(array|object $fields)
    {
        $this->fields = is_object($fields) ? json_decode($fields, true) : $fields;
    }

    /**
     * Get a field in any case.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param string $field Current field.
     *
     * @return mixed
     */
    public function __get(string $field): mixed
    {
        return data_get($this->fields, snake($field));
    }

    /**
     * Version of api entity.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return int
     */
    public function entityVersion(): int
    {
        return $this->entityVersion ?? 0;
    }

    /**
     * @inheritdoc
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     */
    public function toJson($options = 0): bool|string
    {
        return json_encode($this->fields, $options);
    }

    /**
     * @inheritdoc
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     */
    public function jsonSerialize(): array
    {
        return $this->fields;
    }
}
