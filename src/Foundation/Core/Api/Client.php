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
     * @param string $token
     * @return Group
     */
    public function group(string $token): Group
    {
        return new Group($token);
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
     * @param string $token
     * @return User
     */
    public function user(string $token): User
    {
        return new User($token);
    }

    /**
     * @param string $token
     * @return Database
     */
    public function database(string $token): Database
    {
        return new Database($token);
    }
}
