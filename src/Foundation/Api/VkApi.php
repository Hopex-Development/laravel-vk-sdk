<?php

namespace Hopex\VkSdk\Foundation\Api;

use Hopex\VkSdk\Foundation\Api\Methods\Account;
use Hopex\VkSdk\Foundation\Api\Methods\Users;

/**
 * VkApi.
 *
 * @package Hopex\VkSdk\Foundation\Api
 */
class VkApi
{
    /**
     * ...
     *
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
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
     * @version VK: 5.199 | SDK: 3 | Summary: 5.199.3
     *
     * @return Account
     */
    public function account(): Account
    {
        return new Account();
    }
}
