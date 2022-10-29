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
     * @param string|null $version
     * @param string|null $language
     * @return Group
     */
    public function group(string $userOrGroupToken, string $version = null, string $language = null): Group
    {
        return new Group($userOrGroupToken, $version, $language);
    }

    /**
     * @param string $userOrGroupToken
     * @param string|null $version
     * @param string|null $language
     * @return Message
     */
    public function message(string $userOrGroupToken, string $version = null, string $language = null): Message
    {
        return new Message($userOrGroupToken, $version, $language);
    }

    /**
     * @param string $token
     * @param string|null $version
     * @param string|null $language
     * @return User
     */
    public function user(string $token, string $version = null, string $language = null): User
    {
        return new User($token, $version, $language);
    }

    /**
     * @param string $userOrServiceToken
     * @param string|null $version
     * @param string|null $language
     * @return Database
     */
    public function database(string $userOrServiceToken, string $version = null, string $language = null): Database
    {
//        dd($userOrServiceToken);
        return new Database($userOrServiceToken, $version, $language);
    }
}
