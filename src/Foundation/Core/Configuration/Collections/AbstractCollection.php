<?php

namespace Hopex\VkSdk\Foundation\Core\Configuration\Collections;

/**
 * Basic implementation of the configuration collection.
 *
 * @package Hopex\VkSdk\Foundation\Core\Configuration\Collections
 */
abstract class AbstractCollection
{
    /**
     * Full path of the model.
     *
     * @version SDK: 3
     *
     * @var string
     */
    protected string $modelClass = '';

    /**
     * Root key name of the configuration in the configuration file.
     *
     * @version SDK: 3
     *
     * @var string
     */
    protected string $rootKey;

    /**
     * Collection of the configuration models.
     *
     * @version SDK: 3
     *
     * @var array
     */
    protected array $models;

    /**
     * Basic implementation of the configuration collection.
     *
     * @version SDK: 3
     */
    final public function __construct()
    {
        $this->models = config("vk-sdk.$this->rootKey", []);
    }

    /**
     * Get all models from the collection.
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
