<?php

namespace Hopex\VkSdk\Foundation\Core\Configuration\Collections;

/**
 * Collection.
 *
 * @package Hopex\VkSdk\Foundation\Core\Configuration\Collections
 */
abstract class Collection
{
    protected string $modelClass = '';

    protected string $rootKey;

    protected array $models;

    final public function __construct()
    {
        $this->models = config("vk-sdk.$this->rootKey", []);
    }

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return array
     */
    public function all(): array
    {
        return array_map(fn(array $model) => new $this->modelClass($model), $this->models);
    }
}
