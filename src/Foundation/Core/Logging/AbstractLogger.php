<?php

namespace Hopex\VkSdk\Foundation\Core\Logging;

use Hopex\VkSdk\Contracts\LoggerContract;
use Hopex\VkSdk\Facades\Config;
use Illuminate\Support\Facades\Log;
use Psr\Log\LoggerInterface;

/**
 * The basic logging class that defines its channel.
 *
 * @package Hopex\VkSdk\Foundation\Core\Logging
 */
abstract class AbstractLogger implements LoggerContract
{
    private LoggerInterface $logger;

    /**
     * The basic logging class that defines its channel.
     *
     * @version SDK: 3
     *
     * @param null|string $channel The name of the channel (by default 'info').
     */
    public function __construct(string $channel = null)
    {
        $this->logger = Log::build(Config::logging()->channels()->getByName($channel ?? 'info'));
    }

    /**
     * @inheritDoc
     */
    public function emergency(mixed $context): void
    {
        $this->log(__FUNCTION__, $context);
    }

    /**
     * Log any message to the log.
     *
     * @version SDK: 3
     *
     * @param string $level   Level of the log.
     * @param mixed  $context Context of the log.
     *
     * @return void
     */
    private function log(string $level, mixed $context): void
    {
        $context = !is_array($context) || !is_object($context) ? [$context] : $context;
        $this->logger->{$level}(
            json_encode($context, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)
        );
    }

    /**
     * @inheritDoc
     */
    public function alert(mixed $context): void
    {
        $this->log(__FUNCTION__, $context);
    }

    /**
     * @inheritDoc
     */
    public function critical(mixed $context): void
    {
        $this->log(__FUNCTION__, $context);
    }

    /**
     * @inheritDoc
     */
    public function error(mixed $context): void
    {
        $this->log(__FUNCTION__, $context);
    }

    /**
     * @inheritDoc
     */
    public function warning(mixed $context): void
    {
        $this->log(__FUNCTION__, $context);
    }

    /**
     * @inheritDoc
     */
    public function notice(mixed $context): void
    {
        $this->log(__FUNCTION__, $context);
    }

    /**
     * @inheritDoc
     */
    public function info(mixed $context): void
    {
        $this->log(__FUNCTION__, $context);
    }

    /**
     * @inheritDoc
     */
    public function debug(mixed $context): void
    {
        $this->log(__FUNCTION__, $context);
    }
}
