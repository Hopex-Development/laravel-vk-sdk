<?php

namespace Hopex\VkSdk\Foundation\Api\Entities;

use Illuminate\Contracts\Support\Jsonable;
use JetBrains\PhpStorm\NoReturn;
use JsonSerializable;

/**
 * Base entity.
 *
 * @package Hopex\VkSdk\Foundation\Api\Entities
 *
 * @property-read int $entityVersion
 */
abstract class AbstractEntity implements JsonSerializable, Jsonable
{
    /**
     * Fields of current entity.
     *
     * @version SDK: 3
     *
     * @var array|mixed|object
     */
    protected array|int $fields;

    /**
     * Base entity.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param array|object|int $fields Fields of current entity.
     */
    public function __construct(array|object|int $fields)
    {
        $this->fields = is_object($fields)
            ? json_decode($fields, true)
            : $fields;
    }

    /**
     * Dump current entity.
     *
     * @version SDK: 3
     *
     * @return void
     *
     * @author  Alexandre Daubois <alex.daubois@gmail.com>
     * @author  Nicolas Grekas <p@tchwork.com>
     */
    public function dump(): void
    {
        dump($this->fields);
    }

    /**
     * Die and dump current entity.
     *
     * @version SDK: 3
     *
     * @return void
     */
    #[NoReturn] public function dd(): void
    {
        dd($this->fields);
    }

    /**
     * Get a field in any case.
     *
     * @version SDK: 3
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
     * Version of api entity (if exists).
     *
     * @version SDK: 3
     *
     * @return int
     */
    public function entityVersion(): int
    {
        return $this->entityVersion ?? 0;
    }

    /**
     * {@inheritdoc}
     *
     * @version SDK: 3
     */
    public function toJson($options = 0): bool|string
    {
        return json_encode($this->fields, $options);
    }

    /**
     * {@inheritdoc}
     *
     * @version SDK: 3
     */
    public function jsonSerialize(): array
    {
        return $this->fields;
    }
}
