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
     * @var string Looking for friends.
     */
    case FRIENDS = 'friends';

    /**
     * @var string Search among friends and subscriptions of the user.
     */
    case SUBSCRIPTIONS = 'subscriptions';
}
