<?php

namespace Hopex\VkSdk\Foundation\Api\Entities\Basic;

use Hopex\VkSdk\Foundation\Api\Entities\Entity;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;

/**
 * The object describing the private message.
 *
 * @package Hopex\VkSdk\Foundation\Api\Entities\Messages
 *
 * @link    https://dev.vk.com/en/reference/objects/message
 *
 * @property-read int    $date
 * @property-read int    $fromId
 * @property-read int    $id
 * @property-read int    $out
 * @property-read int    $conversationMessageId
 * @property-read array  $fwdMessages
 * @property-read static $replyMessage
 * @property-read bool   $important
 * @property-read bool   $isHidden
 * @property-read int    $peerId
 * @property-read int    $randomId
 * @property-read string $text
 */
class PrivateMessage extends Entity
{
    /**
     * Time to send.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/message#date
     *
     * @return Carbon
     */
    public function date(): Carbon
    {
        return (new Carbon($this->date ?? 0))->setTimezone(config('app.timezone'));
    }

    /**
     * Sender.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return User
     */
    public function sender(): User
    {
        return new User([]); // todo доработать получение информации
    }

    /**
     * Sender (user) ID.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/message#from_id
     *
     * @return int
     */
    public function senderId(): int
    {
        return $this->fromId ?? 0;
    }

    /**
     * PrivateMessage ID.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/message#id
     *
     * @return int
     */
    public function id(): int
    {
        return $this->id ?? 0;
    }

    /**
     * Type of communication (not returned for messages sent).
     * * 0 — received
     * * 1 — sent
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/message#out
     *
     * @return int
     */
    public function out(): int
    {
        return $this->out ?? 0;
    }

    /**
     * Media attachments of the message (photos, links, etc.).
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/message#attachments
     *
     * @return array
     */
    public function attachments(): array
    {
        return array_map(function (array $attachment) {
            // todo добавить сущность
            return $attachment;
        }, $this->attachments ?? []);
    }

    /**
     * A unique automatically increasing number for all messages with this peer.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/message#conversation_message_id
     *
     * @return int
     */
    public function conversationMessageId(): int
    {
        return $this->conversationMessageId ?? 0;
    }

    /**
     * Indicates whether the message contains forwarded messages.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @see     PrivateMessage::forwardMessages()
     *
     * @return bool
     */
    public function hasForwardMessages(): bool
    {
        return !empty($this->fwdMessages);
    }

    /**
     * An array of messages sent (if any). Maximum number of elements — `100`. Maximum nesting depth for forwarded
     * messages `45` the total maximum quantity in the chain, taking into account the investment — `500`.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/message#fwd_messages
     *
     * @return Collection|PrivateMessage[]
     */
    public function forwardMessages(): Collection|array
    {
        return collect(array_map(fn (array $fields) => new self($fields), $this->fwdMessages ?? []));
    }

    /**
     * Indicates whether the message contains a response to a single message.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @see     PrivateMessage::replyMessage()
     *
     * @return bool
     */
    public function hasReplyMessage(): bool
    {
        return !empty($this->replyMessage);
    }

    /**
     * PrivateMessage to which the current one is sent.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/message#reply_message
     *
     * @return static|false
     */
    public function replyMessage(): static|false
    {
        return $this->hasReplyMessage() ? new self($this->replyMessage) : false;
    }

    /**
     * `true`, if the message is marked as important.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/message#important
     *
     * @return bool
     */
    public function isImportant(): bool
    {
        return $this->important;
    }

    /**
     * Tony Stark was able to bring back half the population of the universe, but he couldn't bring back the
     * description that was once here.
     *
     * @version    VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return bool
     *
     */
    public function isHidden(): bool
    {
        return $this->isHidden;
    }

    /**
     * Appointment (chat) ID.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/message#peer_id
     *
     * @return int The ID of the message recipient.
     */
    public function peerId(): int
    {
        return $this->peerId ?? 0;
    }

    /**
     * Identifier used when sending a message. Returns only for outgoing messages.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/message#random_id
     *
     * @return int A unique identifier of the message.
     */
    public function randomId(): int
    {
        return $this->randomId ?? 0;
    }

    /**
     * Text of the message.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/reference/objects/message#text
     *
     * @return string The text of the personal message
     */
    public function text(): string
    {
        return $this->text ?? '';
    }
}
