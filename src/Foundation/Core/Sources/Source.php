<?php

namespace Hopex\VkSdk\Foundation\Core\Sources;

use Hopex\VkSdk\Facades\SdkConfig;
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
    protected function makePath(string $path): string
    {
        $this->logger = Log::build((array)SdkConfig::logging('channels.source'));
        return str_replace('.', DIRECTORY_SEPARATOR, $path);
    }

    /**
     * @param string $key
     * @return string
     */
    abstract function get(string $key): string;
}
