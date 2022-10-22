<?php

namespace Hopex\VkSdk\Formatters;

use Hopex\VkSdk\Contracts\CanFormat;
use Monolog\Formatter\LineFormatter;
use Monolog\Logger;

class JsonLogFormatter implements CanFormat
{
    public function __invoke(Logger $logger)
    {
        $this->format($logger);
    }

    /**
     * @param $data
     */
    public function format($data)
    {
        $formatter = (new LineFormatter(
            LineFormatter::SIMPLE_FORMAT,
            'Y-m-d H:i:s',
            true,
            true)
        )
        ->setJsonPrettyPrint(true)
        ->addJsonEncodeOption(JSON_UNESCAPED_UNICODE)
        ->addJsonEncodeOption(JSON_UNESCAPED_SLASHES);

        foreach ($data->getHandlers() as $handler) {
            if (method_exists($handler, 'setFormatter'))
                $handler->setFormatter($formatter);
        }
    }
}
