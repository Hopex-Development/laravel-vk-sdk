<?php

namespace Hopex\VkSdk\Formatters;

use Hopex\VkSdk\Contracts\CanFormat;

class BaseFormatter implements CanFormat
{
    /** @var array  */
    private array $formatters = [];

    /**
     * @param string $formatter
     * @return $this
     */
    public function with(string $formatter): static
    {
        $formatter = new $formatter();
        if ($formatter instanceof CanFormat) {
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
