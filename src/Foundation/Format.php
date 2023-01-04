<?php

namespace Hopex\VkSdk\Foundation;

use Hopex\VkSdk\Contracts\CanFormatContract;

/**
 * Class Format
 * @package Hopex\VkSdk\Foundation
 */
class Format implements CanFormatContract
{
    /** @var array */
    private array $formatters = [];

    /**
     * @param string $formatter
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
     * @param $data
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
