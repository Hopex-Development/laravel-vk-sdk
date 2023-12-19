<?php

namespace Hopex\VkSdk\Foundation\Api;

use Hopex\VkSdk\Foundation\Api\Entities\Basic\User;
use Hopex\VkSdk\Foundation\Api\Methods\Account;
use Hopex\VkSdk\Foundation\Api\Methods\Users;

/**
 * Basic implementation of calls to the VK API.
 *
 * @package Hopex\VkSdk\Foundation\Api
 */
class VkApi
{
    /**
     * See description for {@see User}.
     *
     * @version SDK: 3
     *
     * @return Users
     */
    public function users(): Users
    {
        return new Users();
    }

    /**
     * ...
     *
     * @version SDK: 3
     *
     * @todo добавить описание
     *
     * @return Account
     */
    public function account(): Account
    {
        return new Account();
    }
}
