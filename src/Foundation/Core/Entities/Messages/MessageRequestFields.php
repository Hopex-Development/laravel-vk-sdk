<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Messages;

/**
 * Class MessageRequestFields
 * @package Hopex\VkSdk\Foundation\Core\Entities\Messages
 * @see https://dev.vk.com/method/messages.send
 */
class MessageRequestFields
{
    /**
     * @var int|null
     */
    public ?int $user_id = null;

    /**
     * @var int|null
     */
    public ?int $random_id = null;

    /**
     * @var int|null
     */
    public ?int $peer_id = null;

    /**
     * @var array
     */
    public array $peer_ids = [];

    /**
     * @var string|null
     */
    public ?string $domain = null;

    /**
     * @var int|null
     */
    public ?int $chat_id = null;

    /**
     * @var array
     */
    public array $user_ids = [];

    /**
     * @var string|null
     */
    public ?string $message = null;

    /**
     * @var int|null
     */
    public ?int $guid = null;

    /**
     * @var float|null
     */
    public ?float $lat = null;

    /**
     * @var float|null
     */
    public ?float $long = null;

    /**
     * @var string|null
     */
    public ?string $attachment = null;

    /**
     * @var int|null
     */
    public ?int $reply_to = null;

    /**
     * @var array
     */
    public array $forward_messages = [];

    /**
     * @var string|null
     */
    public ?string $forward = null;

    /**
     * @var array
     */
    public array $sticker_id = [];

    /**
     * @var int|null
     */
    public ?int $group_id = null;

    /**
     * @var string|null
     */
    public ?string $keyboard = null;

    /**
     * @var string|null
     */
    public ?string $template = null;

    /**
     * @var string|null
     */
    public ?string $payload = null;

    /**
     * @var string|null
     */
    public ?string $content_source = null;

    /**
     * @var bool|null
     */
    public ?bool $dont_parse_links = null;

    /**
     * @var bool|null
     */
    public ?bool $disable_mentions = null;

    /**
     * @var string|null
     */
    public ?string $intent = null;

    /**
     * @var int|null
     */
    public ?int $subscribe_id = null;

    /**
     * @var int|null
     */
    public ?int $conversation_message_id = null;

    /**
     * @var bool|null
     */
    public ?bool $keep_forward_messages = null;

    /**
     * @var bool|null
     */
    public ?bool $keep_snippets = null;

    /**
     * @var bool|null
     */
    public ?bool $extended = null;

    /**
     * MessageProperties constructor.
     */
    public function __construct()
    {
        $this
            ->setRandomId()
            ->setExtended();
    }

    /**
     * @return MessageRequestFields
     */
    public function setExtended(): MessageRequestFields
    {
        $this->extended = true;
        return $this;
    }

    /**
     * @return MessageRequestFields
     */
    public function setKeepForwardMessages(): MessageRequestFields
    {
        $this->keep_forward_messages = true;
        return $this;
    }

    /**
     * @return MessageRequestFields
     */
    public function setKeepSnippets(): MessageRequestFields
    {
        $this->keep_snippets = true;
        return $this;
    }

    /**
     * @param int|null $conversation_message_id
     * @return MessageRequestFields
     */
    public function setConversationMessageId(?int $conversation_message_id): MessageRequestFields
    {
        $this->conversation_message_id = $conversation_message_id;
        return $this;
    }

    /**
     * @return MessageRequestFields
     */
    public function setRandomId(): MessageRequestFields
    {
        $this->random_id = (int)now()->timestamp;
        return $this;
    }

    /**
     * @param int|null $user_id
     * @return MessageRequestFields
     */
    public function setUserId(?int $user_id): MessageRequestFields
    {
        $this->user_id = $user_id;
        return $this;
    }

    /**
     * @param int|null $peer_id
     * @return MessageRequestFields
     */
    public function setPeerId(?int $peer_id): MessageRequestFields
    {
        $this->peer_id = $peer_id;
        return $this;
    }

    /**
     * @param array $peer_ids
     * @return MessageRequestFields
     */
    public function setPeerIds(array $peer_ids): MessageRequestFields
    {
        $this->peer_ids = $peer_ids;
        return $this;
    }

    /**
     * @param string|null $domain
     * @return MessageRequestFields
     */
    public function setDomain(?string $domain): MessageRequestFields
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @param int|null $chat_id
     * @return MessageRequestFields
     */
    public function setChatId(?int $chat_id): MessageRequestFields
    {
        $this->chat_id = $chat_id;
        return $this;
    }

    /**
     * @param array $user_ids
     * @return MessageRequestFields
     */
    public function setUserIds(array $user_ids): MessageRequestFields
    {
        $this->user_ids = $user_ids;
        return $this;
    }

    /**
     * @param string|null $message
     * @return MessageRequestFields
     */
    public function setMessage(?string $message): MessageRequestFields
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @param int|null $guid
     * @return MessageRequestFields
     */
    public function setGuid(?int $guid): MessageRequestFields
    {
        $this->guid = $guid;
        return $this;
    }

    /**
     * @param float|null $lat
     * @return MessageRequestFields
     */
    public function setLat(?float $lat): MessageRequestFields
    {
        $this->lat = $lat;
        return $this;
    }

    /**
     * @param float|null $long
     * @return MessageRequestFields
     */
    public function setLong(?float $long): MessageRequestFields
    {
        $this->long = $long;
        return $this;
    }

    /**
     * @param string|null $attachment
     * @return MessageRequestFields
     */
    public function setAttachment(?string $attachment): MessageRequestFields
    {
        $this->attachment = $attachment;
        return $this;
    }

    /**
     * @param int|null $reply_to
     * @return MessageRequestFields
     */
    public function setReplyTo(?int $reply_to): MessageRequestFields
    {
        $this->reply_to = $reply_to;
        return $this;
    }

    /**
     * @param array $forward_messages
     * @return MessageRequestFields
     */
    public function setForwardMessages(array $forward_messages): MessageRequestFields
    {
        $this->forward_messages = $forward_messages;
        return $this;
    }

    /**
     * @param string|null $forward
     * @return MessageRequestFields
     */
    public function setForward(?string $forward): MessageRequestFields
    {
        $this->forward = $forward;
        return $this;
    }

    /**
     * @param array $sticker_id
     * @return MessageRequestFields
     */
    public function setStickerId(array $sticker_id): MessageRequestFields
    {
        $this->sticker_id = $sticker_id;
        return $this;
    }

    /**
     * @param int|null $group_id
     * @return MessageRequestFields
     */
    public function setGroupId(?int $group_id): MessageRequestFields
    {
        $this->group_id = $group_id;
        return $this;
    }

    /**
     * @param string|null $keyboard
     * @return MessageRequestFields
     */
    public function setKeyboard(?string $keyboard): MessageRequestFields
    {
        $this->keyboard = $keyboard;
        return $this;
    }

    /**
     * @param string|null $template
     * @return MessageRequestFields
     */
    public function setTemplate(?string $template): MessageRequestFields
    {
        $this->template = $template;
        return $this;
    }

    /**
     * @param string|null $payload
     * @return MessageRequestFields
     */
    public function setPayload(?string $payload): MessageRequestFields
    {
        $this->payload = $payload;
        return $this;
    }

    /**
     * @param string|null $content_source
     * @return MessageRequestFields
     */
    public function setContentSource(?string $content_source): MessageRequestFields
    {
        $this->content_source = $content_source;
        return $this;
    }

    /**
     * @return MessageRequestFields
     */
    public function setDontParseLinks(): MessageRequestFields
    {
        $this->dont_parse_links = true;
        return $this;
    }

    /**
     * @return MessageRequestFields
     */
    public function setDisableMentions(): MessageRequestFields
    {
        $this->disable_mentions = true;
        return $this;
    }

    /**
     * @param string|null $intent
     * @return MessageRequestFields
     */
    public function setIntent(?string $intent): MessageRequestFields
    {
        $this->intent = $intent;
        return $this;
    }

    /**
     * @param int|null $subscribe_id
     * @return MessageRequestFields
     */
    public function setSubscribeId(?int $subscribe_id): MessageRequestFields
    {
        $this->subscribe_id = $subscribe_id;
        return $this;
    }
}
