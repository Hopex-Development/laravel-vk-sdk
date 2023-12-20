<?php

namespace Hopex\VkSdk\Contracts;

/**
 * The interface for the logger.
 *
 * @package Hopex\VkSdk\Contracts
 */
interface LoggerContract
{
    /**
     * System is unusable.
     *
     * @version SDK: 3
     *
     * @param mixed $context Anything you want to log.
     *
     * @return void
     */
    public function emergency(mixed $context): void;

    /**
     * Action must be taken immediately.
     *
     * @version SDK: 3
     *
     * Example: Entire website down, database unavailable, etc. This should
     * trigger the SMS alerts and wake you up.
     *
     * @param mixed $context Anything you want to log.
     *
     * @return void
     */
    public function alert(mixed $context): void;

    /**
     * Critical conditions.
     *
     * @version SDK: 3
     *
     * Example: Application component unavailable, unexpected exception.
     *
     * @param mixed $context Anything you want to log.
     *
     * @return void
     */
    public function critical(mixed $context): void;

    /**
     * Runtime errors that do not require immediate action but should typically
     * be logged and monitored.
     *
     * @version SDK: 3
     *
     * @param mixed $context Anything you want to log.
     *
     * @return void
     */
    public function error(mixed $context): void;

    /**
     * Exceptional occurrences that are not errors.
     *
     * Example: Use of deprecated APIs, poor use of an API, undesirable things
     * that are not necessarily wrong.
     *
     * @version SDK: 3
     *
     * @param mixed $context
     *
     * @return void
     */
    public function warning(mixed $context): void;

    /**
     * Normal but significant events.
     *
     * @version SDK: 3
     *
     * @param mixed $context Anything you want to log.
     *
     * @return void
     */
    public function notice(mixed $context): void;

    /**
     * Interesting events.
     *
     * Example: User logs in, SQL logs.
     *
     * @version SDK: 3
     *
     * @param mixed $context Anything you want to log.
     *
     * @return void
     */
    public function info(mixed $context): void;

    /**
     * Detailed debug information.
     *
     * @version SDK: 3
     *
     * @param mixed $context Anything you want to log.
     *
     * @return void
     */
    public function debug(mixed $context): void;
}
