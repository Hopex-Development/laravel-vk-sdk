<?php

namespace Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Enums;

/**
 * The sections among which you need to search.
 *
 * @package Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Enums
 *
 * @link    https://dev.vk.com/en/method/users.search
 */
enum SearchFromList: string
{
    /**
     * Looking for friends.
     */
    case FRIENDS = 'friends';

    /**
     * Search among friends and subscriptions of the user.
     */
    case SUBSCRIPTIONS = 'subscriptions';
}
