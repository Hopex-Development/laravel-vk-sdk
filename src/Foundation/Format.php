<?php

namespace Hopex\VkSdk\Foundation;

use Hopex\VkSdk\Contracts\CanFormatContract;

/**
 * Format.
 *
 * @package Hopex\VkSdk\Foundation
 */
class Format implements CanFormatContract
{
    private array $formatters = [];

    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param string $formatter
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
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @param $data
     *
     * @return mixed
     */
    public function format($data): mixed
    {
        foreach ($this->formatters as $formatter) {
            $data = $formatter->format($data);
        }

        return $data;
    }
}
