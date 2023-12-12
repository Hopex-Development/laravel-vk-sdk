<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Messages;

use Hopex\VkSdk\Exceptions\Api\ApiException;
use Hopex\VkSdk\Foundation\Core\Api\Request;
use Hopex\VkSdk\Foundation\Core\Entities\Messages\Conversations\ConversationsFieldsCollection;
use Illuminate\Support\Collection;
use Throwable;

/**
 * Message.
 *
 * @package Hopex\VkSdk\Foundation\Core\Entities\Messages
 */
class Message extends Request
{
    protected string $scope = 'messages.';
    
    /**
     * addChatUser.
     *
     * @version 0.0.0
     *
     * @param array $args
     *
     * @throws ApiException
     * @throws Throwable
     *                  
     * @return Collection
     */
    public function addChatUser(array $args = []): Collection
    {
        return $this->call('addChatUser', $args);
    }

    /**
     * allowMessagesFromGroup.
     *
     * @version 0.0.0
     *
     * @param array $args
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function allowMessagesFromGroup(array $args = []): Collection
    {
        return $this->call('allowMessagesFromGroup', $args);
    }

    /**
     * createChat.
     *
     * @version 0.0.0
     *
     * @param array $args
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function createChat(array $args = []): Collection
    {
        return $this->call('createChat', $args);
    }

    /**
     * delete.
     *
     * @version 0.0.0
     *
     * @param array $args
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function delete(array $args = []): Collection
    {
        return $this->call('delete', $args);
    }

    /**
     * deleteChatPhoto.
     *
     * @version 0.0.0
     *
     * @param array $args
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function deleteChatPhoto(array $args = []): Collection
    {
        return $this->call('deleteChatPhoto', $args);
    }

    /**
     * deleteConversation.
     *
     * @version 0.0.0
     *
     * @param array $args
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function deleteConversation(array $args = []): Collection
    {
        return $this->call('deleteConversation', $args);
    }

    /**
     * denyMessagesFromGroup.
     *
     * @version 0.0.0
     *
     * @param array $args
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function denyMessagesFromGroup(array $args = []): Collection
    {
        return $this->call('denyMessagesFromGroup', $args);
    }

    /**
     * edit.
     *
     * @version 0.0.0
     *
     * @param MessageRequestFields $messageProperties
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function edit(MessageRequestFields $messageProperties): Collection
    {
        return $this->call('edit', get_object_vars($messageProperties));
    }

    /**
     * editChat.
     *
     * @version 0.0.0
     *
     * @param array $args
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function editChat(array $args = []): Collection
    {
        return $this->call('editChat', $args);
    }

    /**
     * getByConversationMessageId.
     *
     * @version 0.0.0
     *
     * @param array $args
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function getByConversationMessageId(array $args = []): Collection
    {
        return $this->call('getByConversationMessageId', $args);
    }

    /**
     * getById.
     *
     * @version 0.0.0
     *
     * @param array $args
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function getById(array $args = []): Collection
    {
        return $this->call('getById', $args);
    }

    /**
     * getChatPreview.
     *
     * @version 0.0.0
     *
     * @param array $args
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function getChatPreview(array $args = []): Collection
    {
        return $this->call('getChatPreview', $args);
    }

    /**
     * getConversationMembers.
     *
     * @version 0.0.0
     *
     * @param array $args
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function getConversationMembers(array $args = []): Collection
    {
        return $this->call('getConversationMembers', $args);
    }

    /**
     * getConversations.
     *
     * @version 0.0.0
     *
     * @param array $args
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function getConversations(array $args = []): Collection
    {
        return $this->call('getConversations', $args);
    }

    /**
     * getConversationsById.
     *
     * @version 0.0.0
     *
     * @param MessageRequestFields $requestFields
     * @param array                $fields
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return ConversationsFieldsCollection
     */
    public function getConversationsById(MessageRequestFields $requestFields, array $fields = []): ConversationsFieldsCollection
    {
        return new ConversationsFieldsCollection($this->call(
            'getConversationsById',
            array_merge(get_object_vars($requestFields), [
                'fields' => $fields
            ])
        ));
    }

    /**
     * getHistory.
     *
     * @version 0.0.0
     *
     * @param array $args
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function getHistory(array $args = []): Collection
    {
        return $this->call('getHistory', $args);
    }

    /**
     * getHistoryAttachments.
     *
     * @version 0.0.0
     *
     * @param array $args
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function getHistoryAttachments(array $args = []): Collection
    {
        return $this->call('getHistoryAttachments', $args);
    }

    /**
     * getInviteLink.
     *
     * @version 0.0.0
     *
     * @param array $args
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function getInviteLink(array $args = []): Collection
    {
        return $this->call('getInviteLink', $args);
    }

    /**
     * getLastActivity.
     *
     * @version 0.0.0
     *
     * @param array $args
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function getLastActivity(array $args = []): Collection
    {
        return $this->call('getLastActivity', $args);
    }

    /**
     * getLongPollHistory.
     *
     * @version 0.0.0
     *
     * @param array $args
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function getLongPollHistory(array $args = []): Collection
    {
        return $this->call('getLongPollHistory', $args);
    }

    /**
     * getLongPollServer.
     *
     * @version 0.0.0
     *
     * @param array $args
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function getLongPollServer(array $args = []): Collection
    {
        return $this->call('getLongPollServer', $args);
    }

    /**
     * isMessagesFromGroupAllowed.
     *
     * @version 0.0.0
     *
     * @param array $args
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function isMessagesFromGroupAllowed(array $args = []): Collection
    {
        return $this->call('isMessagesFromGroupAllowed', $args);
    }

    /**
     * joinChatByInviteLink.
     *
     * @version 0.0.0
     *
     * @param array $args
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function joinChatByInviteLink(array $args = []): Collection
    {
        return $this->call('joinChatByInviteLink', $args);
    }

    /**
     * markAsAnsweredConversation.
     *
     * @version 0.0.0
     *
     * @param array $args
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function markAsAnsweredConversation(array $args = []): Collection
    {
        return $this->call('markAsAnsweredConversation', $args);
    }

    /**
     * markAsImportant.
     *
     * @version 0.0.0
     *
     * @param array $args
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function markAsImportant(array $args = []): Collection
    {
        return $this->call('markAsImportant', $args);
    }

    /**
     * markAsImportantConversation.
     *
     * @version 0.0.0
     *
     * @param array $args
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function markAsImportantConversation(array $args = []): Collection
    {
        return $this->call('markAsImportantConversation', $args);
    }

    /**
     * markAsRead.
     *
     * @version 0.0.0
     *
     * @param array $args
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function markAsRead(array $args = []): Collection
    {
        return $this->call('markAsRead', $args);
    }

    /**
     * pin.
     *
     * @version 0.0.0
     *
     * @param array $args
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function pin(array $args = []): Collection
    {
        return $this->call('pin', $args);
    }

    /**
     * removeChatUser.
     *
     * @version 0.0.0
     *
     * @param array $args
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function removeChatUser(array $args = []): Collection
    {
        return $this->call('removeChatUser', $args);
    }

    /**
     * restore.
     *
     * @version 0.0.0
     *
     * @param array $args
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function restore(array $args = []): Collection
    {
        return $this->call('restore', $args);
    }

    /**
     * search.
     *
     * @version 0.0.0
     *
     * @param array $args
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function search(array $args = []): Collection
    {
        return $this->call('search', $args);
    }

    /**
     * searchConversations.
     *
     * @version 0.0.0
     *
     * @param array $args
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function searchConversations(array $args = []): Collection
    {
        return $this->call('searchConversations', $args);
    }

    /**
     * send.
     *
     * @version 0.0.0
     *
     * @param MessageRequestFields $messageProperties
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function send(MessageRequestFields $messageProperties): Collection
    {
        return $this->call('send', get_object_vars($messageProperties));
    }

    /**
     * setActivity.
     *
     * @version 0.0.0
     *
     * @param array $args
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function setActivity(array $args = []): Collection
    {
        return $this->call('setActivity', $args);
    }

    /**
     * setChatPhoto.
     *
     * @version 0.0.0
     *
     * @param array $args
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function setChatPhoto(array $args = []): Collection
    {
        return $this->call('setChatPhoto', $args);
    }

    /**
     * unpin.
     *
     * @version 0.0.0
     *
     * @param array $args
     *
     * @throws ApiException
     * @throws Throwable
     *
     * @return Collection
     */
    public function unpin(array $args = []): Collection
    {
        return $this->call('unpin', $args);
    }
}
