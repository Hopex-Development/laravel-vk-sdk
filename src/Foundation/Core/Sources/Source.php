<?php

namespace Hopex\VkSdk\Foundation\Core\Sources;

/**
 * Class Source
 * @package Hopex\VkSdk\Foundation\Core\Sources
 */
abstract class Source
{
    /** @var string */
    protected string $path;

    /**
     * @param string $key
     * @return string
     */
    abstract function get(string $key): string;
}
