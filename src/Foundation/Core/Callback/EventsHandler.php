<?php

namespace Hopex\VkSdk\Foundation\Core\Callback;

use Hopex\VkSdk\Contracts\CallbackEventsContract;
use Hopex\VkSdk\Facades\SdkConfig;
use Hopex\VkSdk\Foundation\Core\Entities\Messages\MessageFields;
use Illuminate\Support\Facades\Log;
use Psr\Log\LoggerInterface;

/**
 * Class EventsHandler
 * @package Hopex\VkSdk\Foundation\Core\Callback
 */
abstract class EventsHandler implements CallbackEventsContract
{
    use SessionTokens {
        SessionTokens::__construct as sessionsConstruct;
    }

    /** @var LoggerInterface */
    protected LoggerInterface $logger;

    /** @var string */
    protected const SUCCESS = 'ok';

    public function __construct()
    {
        $this->sessionsConstruct();
        $this->logger = Log::build((array)SdkConfig::logging('channels.info'));
    }

    /**
     * @inheritDoc
     */
    public function message_new(MessageFields $message): void
    {
        // TODO: Implement message_new() method.
    }

    /**
     * @inheritDoc
     */
    public function message_reply(MessageFields $message): void
    {
        // TODO: Implement message_reply() method.
    }

    /**
     * @inheritDoc
     */
    public function message_allow(MessageFields $message): void
    {
        // TODO: Implement message_allow() method.
    }

    /**
     * @inheritDoc
     */
    public function message_deny(MessageFields $message): void
    {
        // TODO: Implement message_deny() method.
    }
}
