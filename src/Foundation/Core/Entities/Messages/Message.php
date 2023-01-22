<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Messages;

use Hopex\VkSdk\Exceptions\Api\ApiException;
use Hopex\VkSdk\Foundation\Core\Api\Request;
use Hopex\VkSdk\Foundation\Core\Entities\Messages\Conversations\ConversationsFieldsCollection;
use Illuminate\Support\Collection;
use Throwable;

/**
 * Class ServerMessage
 * @package Hopex\VkSdk\Foundation\Core\Entities\Messages
 */
class Message extends Request
{
    /** @var string */
    private const SCOPE = 'messages.';

    /**
     * @throws ApiException
     * @throws Throwable
     */
    public function addChatUser(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'addChatUser', $args);
    }

    /**
     * @throws Throwable
     * @throws ApiException
     */
    public function allowMessagesFromGroup(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'allowMessagesFromGroup', $args);
    }

    /**
     * @throws Throwable
     * @throws ApiException
     */
    public function createChat(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'createChat', $args);
    }

    /**
     * @throws Throwable
     * @throws ApiException
     */
    public function delete(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'delete', $args);
    }

    /**
     * @throws ApiException
     * @throws Throwable
     */
    public function deleteChatPhoto(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'deleteChatPhoto', $args);
    }

    /**
     * @throws Throwable
     * @throws ApiException
     */
    public function deleteConversation(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'deleteConversation', $args);
    }

    /**
     * @throws ApiException
     * @throws Throwable
     */
    public function denyMessagesFromGroup(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'denyMessagesFromGroup', $args);
    }

    /**
     * @param MessageRequestFields $messageProperties
     * @return Collection
     * @throws ApiException
     * @throws Throwable
     */
    public function edit(MessageRequestFields $messageProperties): Collection
    {
        return $this->call(self::SCOPE . 'edit', get_object_vars($messageProperties));
    }

    /**
     * @throws Throwable
     * @throws ApiException
     */
    public function editChat(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'editChat', $args);
    }

    /**
     * @throws Throwable
     * @throws ApiException
     */
    public function getByConversationMessageId(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'getByConversationMessageId', $args);
    }

    /**
     * @throws ApiException
     * @throws Throwable
     */
    public function getById(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'getById', $args);
    }

    /**
     * @throws Throwable
     * @throws ApiException
     */
    public function getChatPreview(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'getChatPreview', $args);
    }

    /**
     * @throws Throwable
     * @throws ApiException
     */
    public function getConversationMembers(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'getConversationMembers', $args);
    }

    /**
     * @throws Throwable
     * @throws ApiException
     */
    public function getConversations(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'getConversations', $args);
    }

    /**
     * @throws Throwable
     * @throws ApiException
     */
    public function getConversationsById(MessageRequestFields $requestFields, array $fields = []): ConversationsFieldsCollection
    {
        return new ConversationsFieldsCollection($this->call(
            self::SCOPE . 'getConversationsById',
            array_merge(get_object_vars($requestFields), [
                'fields' => $fields
            ])
        ));
    }

    /**
     * @throws Throwable
     * @throws ApiException
     */
    public function getHistory(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'getHistory', $args);
    }

    /**
     * @throws ApiException
     * @throws Throwable
     */
    public function getHistoryAttachments(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'getHistoryAttachments', $args);
    }

    /**
     * @throws ApiException
     * @throws Throwable
     */
    public function getInviteLink(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'getInviteLink', $args);
    }

    /**
     * @throws ApiException
     * @throws Throwable
     */
    public function getLastActivity(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'getLastActivity', $args);
    }

    /**
     * @throws Throwable
     * @throws ApiException
     */
    public function getLongPollHistory(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'getLongPollHistory', $args);
    }

    /**
     * @throws ApiException
     * @throws Throwable
     */
    public function getLongPollServer(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'getLongPollServer', $args);
    }

    /**
     * @throws Throwable
     * @throws ApiException
     */
    public function isMessagesFromGroupAllowed(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'isMessagesFromGroupAllowed', $args);
    }

    /**
     * @throws Throwable
     * @throws ApiException
     */
    public function joinChatByInviteLink(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'joinChatByInviteLink', $args);
    }

    /**
     * @throws Throwable
     * @throws ApiException
     */
    public function markAsAnsweredConversation(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'markAsAnsweredConversation', $args);
    }

    /**
     * @throws ApiException
     * @throws Throwable
     */
    public function markAsImportant(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'markAsImportant', $args);
    }

    /**
     * @throws ApiException
     * @throws Throwable
     */
    public function markAsImportantConversation(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'markAsImportantConversation', $args);
    }

    /**
     * @throws Throwable
     * @throws ApiException
     */
    public function markAsRead(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'markAsRead', $args);
    }

    /**
     * @throws ApiException
     * @throws Throwable
     */
    public function pin(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'pin', $args);
    }

    /**
     * @throws Throwable
     * @throws ApiException
     */
    public function removeChatUser(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'removeChatUser', $args);
    }

    /**
     * @throws ApiException
     * @throws Throwable
     */
    public function restore(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'restore', $args);
    }

    /**
     * @throws Throwable
     * @throws ApiException
     */
    public function search(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'search', $args);
    }

    /**
     * @throws ApiException
     * @throws Throwable
     */
    public function searchConversations(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'searchConversations', $args);
    }

    /**
     * @throws Throwable
     * @throws ApiException
     */
    public function send(MessageRequestFields $messageProperties): Collection
    {
        return $this->call(self::SCOPE . 'send', get_object_vars($messageProperties));
    }

    /**
     * @throws ApiException
     * @throws Throwable
     */
    public function setActivity(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'setActivity', $args);
    }

    /**
     * @throws Throwable
     * @throws ApiException
     */
    public function setChatPhoto(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'setChatPhoto', $args);
    }

    /**
     * @throws ApiException
     * @throws Throwable
     */
    public function unpin(array $args = []): Collection
    {
        return $this->call(self::SCOPE . 'unpin', $args);
    }
}
