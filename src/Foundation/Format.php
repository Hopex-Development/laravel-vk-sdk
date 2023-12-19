<?php

namespace Hopex\VkSdk\Foundation;

use Hopex\VkSdk\Contracts\CanFormatContract;

/**
 * Implements the functionality of changing data using several formatters.
 *
 * @package Hopex\VkSdk\Foundation
 */
class Format implements CanFormatContract
{
    /**
     * An array of formatters that will be used to modify the data.
     *
     * @var array
     */
    private array $formatters = [];

    /**
     * Adds the formatter class to the array of formatters that will be used to modify the data.
     *
     * @version SDK: 3
     *
     * @param string $formatter The path of the formatter class.
     *
     * @return $this
     */
    public function with(string $formatter): static
    {
        $formatter = new $formatter();
        if ($formatter instanceof CanFormatContract) {
            $this->formatters[] = $formatter;
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function format(mixed $data): mixed
    {
        foreach ($this->formatters as $formatter) {
            $data = $formatter->format($data);
        }

        return $data;
    }
}
