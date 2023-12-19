<?php

namespace Hopex\VkSdk\Contracts;

/**
 * Describes the methods that determine the functionality of an object that allows formatting data..
 *
 * @package Hopex\VkSdk\Contracts
 */
interface CanFormatContract
{
    /**
     * Modifies the data using the formatters.
     *
     * @version SDK: 3
     *
     * @param mixed $data The data that will be modified.
     *
     * @return mixed
     */
    public function format(mixed $data): mixed;
}
