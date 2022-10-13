<?php

namespace Hopex\VkSdk\Formatters;

use Monolog\Formatter\LineFormatter;
use Monolog\Logger;

class JsonLogFormatter
{
    public function __invoke(Logger $logger)
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

        foreach ($logger->getHandlers() as $handler) {
            if (method_exists($handler, 'setFormatter'))
                $handler->setFormatter($formatter);
        }
    }
}
