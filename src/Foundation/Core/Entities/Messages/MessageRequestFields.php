<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Messages;

/**
 * Class MessageRequestFields
 *
 * @see     https://dev.vk.com/method/messages.send
 *
 * @package Hopex\VkSdk\Foundation\Core\Entities\Messages
 */
class MessageRequestFields
{
    public ?int $userId = null;

    public ?int $randomId = null;

    public ?int $peerId = null;

    public array $peerIds = [];

    public ?string $domain = null;

    public ?int $chatId = null;

    public array $userIds = [];

    public ?string $message = null;

    public ?int $guid = null;

    public ?float $lat = null;

    public ?float $long = null;

    public ?string $attachment = null;

    public ?int $replyTo = null;

    public array $forwardMessages = [];

    public ?string $forward = null;

    public array $stickerId = [];

    public ?int $groupId = null;

    public ?string $keyboard = null;

    public ?string $template = null;

    public ?string $payload = null;

    public ?string $contentSource = null;

    public ?bool $dontParseLinks = null;

    public ?bool $disableMentions = null;

    public ?string $intent = null;

    public ?int $subscribeId = null;

    public ?int $conversationMessageId = null;

    public ?bool $keepForwardMessages = null;

    public ?bool $keepSnippets = null;

    public ?bool $extended = null;

    public function __construct()
    {
        $this->setRandomId()->extended();
    }

    /**
     * extended.
     *
     * @version 0.0.0
     *
     * @return $this
     */
    public function extended(): MessageRequestFields
    {
        $this->extended = true;

        return $this;
    }

    /**
     * keepForwardMessages.
     *
     * @version 0.0.0
     *
     * @return $this
     */
    public function keepForwardMessages(): MessageRequestFields
    {
        $this->keepForwardMessages = true;

        return $this;
    }

    /**
     * keepSnippets.
     *
     * @version 0.0.0
     *
     * @return $this
     */
    public function keepSnippets(): MessageRequestFields
    {
        $this->keepSnippets = true;

        return $this;
    }

    /**
     * setConversationMessageId.
     *
     * @version 0.0.0
     *
     * @param int|null $conversationMessageId
     *
     * @return $this
     */
    public function setConversationMessageId(?int $conversationMessageId): MessageRequestFields
    {
        $this->conversationMessageId = $conversationMessageId;

        return $this;
    }

    /**
     * setRandomId.
     *
     * @version 0.0.0
     *
     * @return $this
     */
    public function setRandomId(): MessageRequestFields
    {
        $this->randomId = (int)now()->timestamp;

        return $this;
    }

    /**
     * setUserId.
     *
     * @version 0.0.0
     *
     * @param int|null $userId
     *
     * @return $this
     */
    public function setUserId(?int $userId): MessageRequestFields
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * setPeerId.
     *
     * @version 0.0.0
     *
     * @param int|null $peerId
     *
     * @return $this
     */
    public function setPeerId(?int $peerId): MessageRequestFields
    {
        $this->peerId = $peerId;

        return $this;
    }

    /**
     * setPeerIds.
     *
     * @version 0.0.0
     *
     * @param array $peerIds
     *
     * @return $this
     */
    public function setPeerIds(array $peerIds): MessageRequestFields
    {
        $this->peerIds = $peerIds;

        return $this;
    }

    /**
     * setDomain.
     *
     * @version 0.0.0
     *
     * @param string|null $domain
     *
     * @return $this
     */
    public function setDomain(?string $domain): MessageRequestFields
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * setChatId.
     *
     * @version 0.0.0
     *
     * @param int|null $chatId
     *
     * @return $this
     */
    public function setChatId(?int $chatId): MessageRequestFields
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * setUserIds.
     *
     * @version 0.0.0
     *
     * @param array $userIds
     *
     * @return $this
     */
    public function setUserIds(array $userIds): MessageRequestFields
    {
        $this->userIds = $userIds;

        return $this;
    }

    /**
     * setMessage.
     *
     * @version 0.0.0
     *
     * @param string|null $message
     *
     * @return $this
     */
    public function setMessage(?string $message): MessageRequestFields
    {
        $this->message = $message;

        return $this;
    }

    /**
     * setGuid.
     *
     * @version 0.0.0
     *
     * @param int|null $guid
     *
     * @return $this
     */
    public function setGuid(?int $guid): MessageRequestFields
    {
        $this->guid = $guid;

        return $this;
    }

    /**
     * setLat.
     *
     * @version 0.0.0
     *
     * @param float|null $lat
     *
     * @return $this
     */
    public function setLat(?float $lat): MessageRequestFields
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * setLong.
     *
     * @version 0.0.0
     *
     * @param float|null $long
     *
     * @return $this
     */
    public function setLong(?float $long): MessageRequestFields
    {
        $this->long = $long;

        return $this;
    }

    /**
     * setAttachment.
     *
     * @version 0.0.0
     *
     * @param string|null $attachment
     *
     * @return $this
     */
    public function setAttachment(?string $attachment): MessageRequestFields
    {
        $this->attachment = $attachment;

        return $this;
    }

    /**
     * setReplyTo.
     *
     * @version 0.0.0
     *
     * @param int|null $replyTo
     *
     * @return $this
     */
    public function setReplyTo(?int $replyTo): MessageRequestFields
    {
        $this->replyTo = $replyTo;

        return $this;
    }

    /**
     * setForwardMessages.
     *
     * @version 0.0.0
     *
     * @param array $forwardMessages
     *
     * @return $this
     */
    public function setForwardMessages(array $forwardMessages): MessageRequestFields
    {
        $this->forwardMessages = $forwardMessages;

        return $this;
    }

    /**
     * setForward.
     *
     * @version 0.0.0
     *
     * @param string|null $forward
     *
     * @return $this
     */
    public function setForward(?string $forward): MessageRequestFields
    {
        $this->forward = $forward;

        return $this;
    }

    /**
     * setStickerId.
     *
     * @version 0.0.0
     *
     * @param array $stickerId
     *
     * @return $this
     */
    public function setStickerId(array $stickerId): MessageRequestFields
    {
        $this->stickerId = $stickerId;

        return $this;
    }

    /**
     * setGroupId.
     *
     * @version 0.0.0
     *
     * @param int|null $groupId
     *
     * @return $this
     */
    public function setGroupId(?int $groupId): MessageRequestFields
    {
        $this->groupId = $groupId;

        return $this;
    }

    /**
     * setKeyboard.
     *
     * @version 0.0.0
     *
     * @param string|null $keyboard
     *
     * @return $this
     */
    public function setKeyboard(?string $keyboard): MessageRequestFields
    {
        $this->keyboard = $keyboard;

        return $this;
    }

    /**
     * setTemplate.
     *
     * @version 0.0.0
     *
     * @param string|null $template
     *
     * @return $this
     */
    public function setTemplate(?string $template): MessageRequestFields
    {
        $this->template = $template;

        return $this;
    }

    /**
     * setPayload.
     *
     * @version 0.0.0
     *
     * @param string|null $payload
     *
     * @return $this
     */
    public function setPayload(?string $payload): MessageRequestFields
    {
        $this->payload = $payload;

        return $this;
    }

    /**
     * setContentSource.
     *
     * @version 0.0.0
     *
     * @param string|null $contentSource
     *
     * @return $this
     */
    public function setContentSource(?string $contentSource): MessageRequestFields
    {
        $this->contentSource = $contentSource;

        return $this;
    }

    /**
     * dontParseLinks.
     *
     * @version 0.0.0
     *
     * @return $this
     */
    public function dontParseLinks(): MessageRequestFields
    {
        $this->dontParseLinks = true;

        return $this;
    }

    /**
     * disableMentions.
     *
     * @version 0.0.0
     *
     * @return $this
     */
    public function disableMentions(): MessageRequestFields
    {
        $this->disableMentions = true;

        return $this;
    }

    /**
     * setIntent.
     *
     * @version 0.0.0
     *
     * @param string|null $intent
     *
     * @return $this
     */
    public function setIntent(?string $intent): MessageRequestFields
    {
        $this->intent = $intent;

        return $this;
    }

    /**
     * setSubscribeId.
     *
     * @version 0.0.0
     *
     * @param int|null $subscribeId
     *
     * @return $this
     */
    public function setSubscribeId(?int $subscribeId): MessageRequestFields
    {
        $this->subscribeId = $subscribeId;

        return $this;
    }
}
