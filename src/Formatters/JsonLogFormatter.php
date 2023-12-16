<?php

namespace Hopex\VkSdk\Formatters;

use Monolog\Formatter\LineFormatter;
use Monolog\Logger;

/**
 * JSON log formatter.
 *
 * @package Hopex\VkSdk\Formatters
 */
class JsonLogFormatter
{
    public function __invoke(Logger $logger): void
    {
        $this->format($logger);
    }

    /**
     * Set JSON format for logger.
     *
     * @version SDK: 3
     *
     * @param Logger $logger Logger
     *
     * @return void
     */
    public function format(Logger $logger): void
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
