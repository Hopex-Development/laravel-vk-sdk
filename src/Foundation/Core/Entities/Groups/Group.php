<?php

namespace Hopex\VkSdk\Foundation\Core\Entities\Groups;

use Hopex\VkSdk\Foundation\Core\Api\Request;

/**
 * Class Group
 * @package Hopex\VkSdk\Foundation\Core\Entities\Groups
 * @see https://dev.vk.com/method/groups
 */
class Group extends Request
{
    private const SCOPE = 'groups.';

    public function addAddress(array $args = [])
    {
        return $this->call(self::SCOPE . 'addAddress', $args);
    }

    public function addCallbackServer(array $args = [])
    {
        return $this->call(self::SCOPE . 'addCallbackServer', $args);
    }

    public function addLink(array $args = [])
    {
        return $this->call(self::SCOPE . 'addLink', $args);
    }

    public function approveRequest(array $args = [])
    {
        return $this->call(self::SCOPE . 'approveRequest', $args);
    }

    public function ban(array $args = [])
    {
        return $this->call(self::SCOPE . 'ban', $args);
    }

    public function create(array $args = [])
    {
        return $this->call(self::SCOPE . 'create', $args);
    }

    public function deleteCallbackServer(array $args = [])
    {
        return $this->call(self::SCOPE . 'deleteCallbackServer', $args);
    }

    public function deleteLink(array $args = [])
    {
        return $this->call(self::SCOPE . 'deleteLink', $args);
    }

    public function disableOnline(array $args = [])
    {
        return $this->call(self::SCOPE . 'disableOnline', $args);
    }

    public function edit(array $args = [])
    {
        return $this->call(self::SCOPE . 'edit', $args);
    }

    public function editAddress(array $args = [])
    {
        return $this->call(self::SCOPE . 'editAddress', $args);
    }

    public function editCallbackServer(array $args = [])
    {
        return $this->call(self::SCOPE . 'editCallbackServer', $args);
    }

    public function editLink(array $args = [])
    {
        return $this->call(self::SCOPE . 'editLink', $args);
    }

    public function editManager(array $args = [])
    {
        return $this->call(self::SCOPE . 'editManager', $args);
    }

    public function enableOnline(array $args = [])
    {
        return $this->call(self::SCOPE . 'enableOnline', $args);
    }

//	public function get(array $args = []) {
//		return $this->call(self::SCOPE . 'get', $args);
//	}

    public function getAddresses(array $args = [])
    {
        return $this->call(self::SCOPE . 'getAddresses', $args);
    }

    public function getBanned(array $args = [])
    {
        return $this->call(self::SCOPE . 'getBanned', $args);
    }

    public function getById(array $args = [])
    {
        return $this->call(self::SCOPE . 'getById', $args);
    }

    public function getCallbackConfirmationCode(array $args = [])
    {
        return $this->call(self::SCOPE . 'getCallbackConfirmationCode', $args);
    }

    public function getCallbackServers(array $args = [])
    {
        return $this->call(self::SCOPE . 'getCallbackServers', $args);
    }

    public function getCallbackSettings(array $args = [])
    {
        return $this->call(self::SCOPE . 'getCallbackSettings', $args);
    }

    public function getCatalog(array $args = [])
    {
        return $this->call(self::SCOPE . 'getCatalog', $args);
    }

    public function getCatalogInfo(array $args = [])
    {
        return $this->call(self::SCOPE . 'getCatalogInfo', $args);
    }

    public function getInvitedUsers(array $args = [])
    {
        return $this->call(self::SCOPE . 'getInvitedUsers', $args);
    }

    public function getInvites(array $args = [])
    {
        return $this->call(self::SCOPE . 'getInvites', $args);
    }

    public function getLongPollServer(array $args = [])
    {
        return $this->call(self::SCOPE . 'getLongPollServer', $args);
    }

    public function getLongPollSettings(array $args = [])
    {
        return $this->call(self::SCOPE . 'getLongPollSettings', $args);
    }

    public function getMembers(array $args = [])
    {
        return $this->call(self::SCOPE . 'getMembers', $args);
    }

    public function getRequests(array $args = [])
    {
        return $this->call(self::SCOPE . 'getRequests', $args);
    }

    public function getSettings(array $args = [])
    {
        return $this->call(self::SCOPE . 'getSettings', $args);
    }

    public function getTokenPermissions($access_token)
    {
        return $this->call(self::SCOPE . 'getTokenPermissions');
    }

    public function invite(array $args = [])
    {
        return $this->call(self::SCOPE . 'invite', $args);
    }

    public function isMember(array $args = [])
    {
        return $this->call(self::SCOPE . 'isMember', $args);
    }

    public function join(array $args = [])
    {
        return $this->call(self::SCOPE . 'join', $args);
    }

    public function leave(array $args = [])
    {
        return $this->call(self::SCOPE . 'leave', $args);
    }

    public function removeUser(array $args = [])
    {
        return $this->call(self::SCOPE . 'removeUser', $args);
    }

    public function reorderLink(array $args = [])
    {
        return $this->call(self::SCOPE . 'reorderLink', $args);
    }

    public function search(array $args = [])
    {
        return $this->call(self::SCOPE . 'search', $args);
    }

    public function setCallbackSettings(array $args = [])
    {
        return $this->call(self::SCOPE . 'setCallbackSettings', $args);
    }

    public function setLongPollSettings(array $args = [])
    {
        return $this->call(self::SCOPE . 'setLongPollSettings', $args);
    }

    public function unban(array $args = [])
    {
        return $this->call(self::SCOPE . 'unban', $args);
    }
}
