<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Messages;

use Hopex\VkSdk\Foundation\Core\Api\Request;
use Illuminate\Support\Collection;

/**
 * Class Message
 * @package Hopex\VkSdk\Foundation\Core\Models\Groups
 */
class Message extends Request
{
    /** @var string  */
    private const SCOPE = 'messages.';

	public function addChatUser(array $args = [])
    {
		return $this->call(self::SCOPE . 'addChatUser', $args);
	}

	public function allowMessagesFromGroup(array $args = [])
    {
		return $this->call(self::SCOPE . 'allowMessagesFromGroup', $args);
	}

	public function createChat(array $args = [])
    {
		return $this->call(self::SCOPE . 'createChat', $args);
	}

	public function delete(array $args = [])
    {
		return $this->call(self::SCOPE . 'delete', $args);
	}

	public function deleteChatPhoto(array $args = [])
    {
		return $this->call(self::SCOPE . 'deleteChatPhoto', $args);
	}

	public function deleteConversation(array $args = [])
    {
		return $this->call(self::SCOPE . 'deleteConversation', $args);
	}

	public function denyMessagesFromGroup(array $args = [])
    {
		return $this->call(self::SCOPE . 'denyMessagesFromGroup', $args);
	}

	public function edit(array $args = [])
    {
		return $this->call(self::SCOPE . 'edit', $args);
	}

	public function editChat(array $args = [])
    {
		return $this->call(self::SCOPE . 'editChat', $args);
	}

	public function getByConversationMessageId(array $args = [])
    {
		return $this->call(self::SCOPE . 'getByConversationMessageId', $args);
	}

	public function getById(array $args = [])
    {
		return $this->call(self::SCOPE . 'getById', $args);
	}

	public function getChatPreview(array $args = [])
    {
		return $this->call(self::SCOPE . 'getChatPreview', $args);
	}

	public function getConversationMembers(array $args = [])
    {
		return $this->call(self::SCOPE . 'getConversationMembers', $args);
	}

	public function getConversations(array $args = [])
    {
		return $this->call(self::SCOPE . 'getConversations', $args);
	}

	public function getConversationsById(array $args = [])
    {
		return $this->call(self::SCOPE . 'getConversationsById', $args);
	}

	public function getHistory(array $args = [])
    {
		return $this->call(self::SCOPE . 'getHistory', $args);
	}

	public function getHistoryAttachments(array $args = [])
    {
		return $this->call(self::SCOPE . 'getHistoryAttachments', $args);
	}

	public function getInviteLink(array $args = [])
    {
		return $this->call(self::SCOPE . 'getInviteLink', $args);
	}

	public function getLastActivity(array $args = [])
    {
		return $this->call(self::SCOPE . 'getLastActivity', $args);
	}

	public function getLongPollHistory(array $args = [])
    {
		return $this->call(self::SCOPE . 'getLongPollHistory', $args);
	}

	public function getLongPollServer(array $args = [])
    {
		return $this->call(self::SCOPE . 'getLongPollServer', $args);
	}

	public function isMessagesFromGroupAllowed(array $args = [])
    {
		return $this->call(self::SCOPE . 'isMessagesFromGroupAllowed', $args);
	}

	public function joinChatByInviteLink(array $args = [])
    {
		return $this->call(self::SCOPE . 'joinChatByInviteLink', $args);
	}

	public function markAsAnsweredConversation(array $args = [])
    {
		return $this->call(self::SCOPE . 'markAsAnsweredConversation', $args);
	}

	public function markAsImportant(array $args = [])
    {
		return $this->call(self::SCOPE . 'markAsImportant', $args);
	}

	public function markAsImportantConversation(array $args = [])
    {
		return $this->call(self::SCOPE . 'markAsImportantConversation', $args);
	}

	public function markAsRead(array $args = [])
    {
		return $this->call(self::SCOPE . 'markAsRead', $args);
	}

	public function pin(array $args = [])
    {
		return $this->call(self::SCOPE . 'pin', $args);
	}

	public function removeChatUser(array $args = [])
    {
		return $this->call(self::SCOPE . 'removeChatUser', $args);
	}

	public function restore(array $args = [])
    {
		return $this->call(self::SCOPE . 'restore', $args);
	}

	public function search(array $args = [])
    {
		return $this->call(self::SCOPE . 'search', $args);
	}

	public function searchConversations(array $args = [])
    {
		return $this->call(self::SCOPE . 'searchConversations', $args);
	}

    public function send(MessageRequestFields $messageProperties): Collection
    {
        return $this->call(self::SCOPE . 'send', get_object_vars($messageProperties));
    }

	public function setActivity(array $args = [])
    {
		return $this->call(self::SCOPE . 'setActivity', $args);
	}

	public function setChatPhoto(array $args = [])
    {
		return $this->call(self::SCOPE . 'setChatPhoto', $args);
	}

	public function unpin(array $args = [])
    {
		return $this->call(self::SCOPE . 'unpin', $args);
	}
}
