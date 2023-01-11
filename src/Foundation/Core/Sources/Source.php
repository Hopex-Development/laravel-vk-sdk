<?php

namespace Hopex\VkSdk\Foundation\Core\Sources;

use Hopex\VkSdk\Exceptions\Formatters\InvalidInputDataTypeException;
use Hopex\VkSdk\Facades\SdkConfig;
use Hopex\VkSdk\Formatters\SourceDataFormatter;
use Illuminate\Support\Facades\Log;
use Psr\Log\LoggerInterface;

/**
 * Class Source
 * @package Hopex\VkSdk\Foundation\Core\Sources
 */
abstract class Source
{
    /** @var string */
    protected string $path;

    /**
     * @var LoggerInterface
     */
    protected LoggerInterface $logger;

    /**
     * @param string $path
     * @return string
     */
    final protected function makePath(string $path): string
    {
        $this->logger = Log::build((array)SdkConfig::logging('channels.source'));
        return str_replace('.', DIRECTORY_SEPARATOR, $path);
    }

    /**
     * @param string $path
     * @return string
     * @throws InvalidInputDataTypeException
     */
    final protected function load(string $path): string
    {
        return (new SourceDataFormatter())->format(file_get_contents($path));
    }

    /**
     * @param string $key
     * @return string
     */
    abstract function get(string $key): string;
}
