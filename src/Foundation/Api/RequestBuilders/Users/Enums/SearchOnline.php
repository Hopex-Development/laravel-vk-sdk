<?php

namespace Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Enums;

/**
 * Consider the status of `online`.
 *
 * @package Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Enums
 *
 * @link    https://dev.vk.com/en/method/users.search
 */
enum SearchOnline: int
{
    /**
     * Search for all users.
     */
    case ALL = 0;

    /**
     * Search only for online users.
     */
    case ONLINE = 1;
}
