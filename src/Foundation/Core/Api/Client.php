<?php

namespace Hopex\VkSdk\Foundation\Core\Api;

use Hopex\VkSdk\Foundation\Core\Models\Database\Database;
use Hopex\VkSdk\Foundation\Core\Models\Groups\Group;
use Hopex\VkSdk\Foundation\Core\Models\Messages\Message;
use Hopex\VkSdk\Foundation\Core\Models\Users\User;

/**
 * Class ApiClient
 * @package Hopex\VkSdk\Foundation
 */
class Client
{
    /**
     * @param string $userOrGroupToken
     * @return Group
     */
    public function group(string $userOrGroupToken): Group
    {
        return new Group($userOrGroupToken);
    }

    /**
     * @param string $token
     * @return Message
     */
    public function message(string $token): Message
    {
        return new Message($token);
    }

    /**
     * @param string $userOrServiceToken
     * @return User
     */
    public function user(string $userOrServiceToken): User
    {
        return new User($userOrServiceToken);
    }

    /**
     * @param string $userOrServiceToken
     * @return Database
     */
    public function database(string $userOrServiceToken): Database
    {
        return new Database($userOrServiceToken);
    }
}
