<?php

namespace Hopex\VkSdk\Models\Traits;

/**
 * Implements magic methods of dynamic calls.
 *
 * @package Hopex\VkSdk\Models\Traits
 */
trait HasCombineCalling
{
    /**
     * @inheritdoc
     */
    public function __call($method, $parameters)
    {
        $data = data_get($this, snake($method));
        if (!is_null($data)) {
            return $data;
        }

        return parent::__call($method, $parameters);
    }

    /**
     * @inheritdoc
     */
    public function __get($key)
    {
        return parent::__get(snake($key));
    }
}