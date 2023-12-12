<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Messages\Events;

use Illuminate\Support\Collection;

/**
 * Class CallbackEvent
 * @package Hopex\VkSdk\Foundation\Core\Entities\Messages\Events
 */
class CallbackEvent
{
    private const USER_ID = 'userId';
    private const PEER_ID = 'peerId';
    private const EVENT_ID = 'event_id';
    private const PAYLOAD = 'payload';
    private const CONVERSATION_MESSAGE_ID = 'conversationMessageId';

    /**
     * @var Collection
     */
    private Collection $event;

    /**
     * CallbackEvent constructor.
     * @param Collection $event
     */
    public function __construct(Collection $event)
    {
        $this->event = $event;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->event->get(self::USER_ID);
    }

    /**
     * @return int
     */
    public function getPeerId(): int
    {
        return $this->event->get(self::PEER_ID);
    }

    /**
     * @return int
     */
    public function getEventId(): int
    {
        return $this->event->get(self::EVENT_ID);
    }

    /**
     * @return Collection
     */
    public function getPayload(): Collection
    {
        return collect($this->event->get(self::PAYLOAD));
    }

    /**
     * @return int
     */
    public function getConversationMessageId(): int
    {
        return $this->event->get(self::CONVERSATION_MESSAGE_ID);
    }
}
