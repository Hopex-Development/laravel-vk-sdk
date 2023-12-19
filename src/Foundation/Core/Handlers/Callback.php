<?php

namespace Hopex\VkSdk\Foundation\Core\Handlers;

use Hopex\VkSdk\Contracts\CallbackEventsContract;
use Psr\Log\LoggerInterface;

/**
 * Handler for incoming callback requests.
 *
 * @package Hopex\VkSdk\Foundation\Core\Handlers
 */
abstract class Callback implements CallbackEventsContract
{
    protected LoggerInterface $logger;

    public function __construct()
    {
        # todo добавить отдельные каналы логирования для хендлеров
        # $this->logger = Log::build((array)SdkConfig::logging('channels.info'));
    }
}
