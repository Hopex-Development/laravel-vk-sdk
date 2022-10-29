<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Database;

use Illuminate\Support\Collection;

/**
 * Class DatabaseCollection
 * @package Hopex\VkSdk\Foundation\Core\Models\Database
 */
abstract class DatabaseCollection
{
    public const COUNT = 'count';
    public const ITEMS = 'items';

    /**
     * @var Collection
     */
    protected Collection $fieldsCollection;

    /**
     * @var string
     */
    protected string $fieldType;

    /**
     * DatabaseCollection constructor.
     * @param array|Collection $fieldsCollection
     */
    public function __construct(array|Collection $fieldsCollection)
    {
        $this->fieldsCollection = $fieldsCollection instanceof Collection ? $fieldsCollection : collect($fieldsCollection);
    }

    /**
     * @return int
     */
    final public function getCount(): int
    {
        return $this->fieldsCollection->get(self::COUNT);
    }

    /**
     * @return Collection
     */
    public function getItems(): Collection
    {
        return collect($this->fieldsCollection->get(self::ITEMS))
            ->map(function ($field) {
                return new $this->fieldType($field);
            });
    }
}
