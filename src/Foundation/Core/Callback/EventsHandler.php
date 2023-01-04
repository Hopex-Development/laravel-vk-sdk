<?php

namespace Hopex\VkSdk\Foundation\Core\Callback;

use Hopex\VkSdk\Contracts\CallbackEventsContract;
use Hopex\VkSdk\Foundation\Core\Entities\Messages\MessageFields;

/**
 * Class EventsHandler
 * @package Hopex\VkSdk\Foundation\Core\Callback
 */
abstract class EventsHandler implements CallbackEventsContract
{
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
