<?php

namespace Hopex\VkSdk\Foundation\Core\Callback;

use Hopex\VkSdk\Foundation\Core\Entities\Client\ClientFields;
use Hopex\VkSdk\Foundation\Core\Entities\Messages\MessageFields;
use Illuminate\Support\Collection;

/**
 * Class BaseEvent
 * @package Hopex\VkSdk\Foundation\Core\Callback
 */
class BaseEvent
{
    private const GROUP_ID = 'group_id';
    private const OBJECT = 'object';
    private const MESSAGE = 'message';
    private const CLIENT_INFO = 'client_info';

    /**
     * @var int
     */
    private int $groupId;

    /**
     * @var Collection
     */
    private Collection $object;

    /**
     * @var Collection
     */
    private Collection $event;

    /**
     * BaseEvent constructor.
     * @param Collection $event
     */
    public function __construct(Collection $event)
    {
        $this->event = $event;
        $this->object = collect($this->event->get(self::OBJECT));
    }

    /**
     * @return int
     */
    public function getGroupId(): int
    {
        return $this->event->get(self::GROUP_ID);
    }

    /**
     * @return Collection
     */
    public function getObject(): Collection
    {
        return $this->object;
    }

    /**
     * @return Collection
     */
    public function getEvent(): Collection
    {
        return $this->event;
    }

    /**
     * @return MessageFields
     */
    public function getMessage(): MessageFields
    {
        return new MessageFields(collect($this->object->get(self::MESSAGE)));
    }

    /**
     * @return ClientFields
     */
    public function getClient(): ClientFields
    {
        return new ClientFields(collect($this->object->get(self::CLIENT_INFO)));
    }
}
