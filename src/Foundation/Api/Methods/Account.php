<?php

namespace Hopex\VkSdk\Foundation\Api\Methods;

use Hopex\VkSdk\Exceptions\Api\HttpStatusCodeException;
use Hopex\VkSdk\Foundation\Api\RequestBuilders\Account\AccountInfoRequestBuilder;
use Hopex\VkSdk\Foundation\Api\Responses\Account\AccountInfoAbstractResponse;
use Throwable;

/**
 * Account.
 *
 * @package Hopex\VkSdk\Foundation\Api\Methods
 */
class Account
{
    /**
     * Adds a user or group to the blacklist.
     * <br><br>
     *
     * This method can be used with a user access token obtained in the standalone app through
     * {@see https://dev.vk.com/en/api/access-token/implicit-flow-user Implicit Flow}.
     * <br><br>
     *
     * If the specified user is a friend of the current user or has an incoming or outgoing friend request from him,
     * then to add the user to the blacklist, your application must have the rights: `friends`.
     * {@see https://dev.vk.com/en/reference/access-rights More about obtaining rights}
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/account.ban
     *
     * @param int $ownerId A user or community ID that will be added to the blacklist.
     *
     * @return void
     */
    public function ban(int $ownerId)
    {
    }

    public function changePassword()
    {
    }

    public function getActiveOffers()
    {
    }

    public function getAppPermissions()
    {
    }

    public function getBanned()
    {
    }

    public function getCounters()
    {
    }

    /**
     * Returns current account info.
     * <br><br>
     *
     * This method can be used with a user access token obtained in the standalone app through
     * {@see https://dev.vk.com/en/api/access-token/implicit-flow-user Implicit Flow}.
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     * @link    https://dev.vk.com/en/method/account.getInfo
     *
     * @param AccountInfoRequestBuilder $builder Fields to return.
     *
     * @throws HttpStatusCodeException
     * @throws Throwable
     *
     * @return AccountInfoAbstractResponse
     */
    public function getInfo(AccountInfoRequestBuilder $builder): AccountInfoAbstractResponse
    {
        return new AccountInfoAbstractResponse($builder->execute());
    }

    public function getProfileInfo()
    {
    }

    public function getPushSettings()
    {
    }

    public function registerDevice()
    {
    }

    public function saveProfileInfo()
    {
    }

    public function setInfo()
    {
    }

    public function setOffline()
    {
    }

    public function setOnline()
    {
    }

    public function setPushSettings()
    {
    }

    public function setSilenceMode()
    {
    }

    public function unban()
    {
    }

    public function unregisterDevice()
    {
    }
}
