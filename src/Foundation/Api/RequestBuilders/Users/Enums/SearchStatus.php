<?php

namespace Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Enums;

/**
 * Family status.
 *
 * @package Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Enums
 *
 * @link    https://dev.vk.com/en/method/users.search
 */
enum SearchStatus: int
{
    /**
     * @var int Unmarried (not married).
     */
    case UNMARRIED = 1;

    /**
     * @var int Meet.
     */
    case MEET = 2;

    /**
     * @var int Engaged.
     */
    case ENGAGED = 3;

    /**
     * @var int Married.
     */
    case MARRIED = 4;

    /**
     * @var int It's complicated.
     */
    case COMPLICATED = 5;

    /**
     * @var int In an active search.
     */
    case ACTIVE_SEARCH = 6;

    /**
     * @var int In love.
     */
    case FOLLOWS = 7;

    /**
     * @var int In a civil marriage.
     */
    case CIVIL_MARRIAGE = 8;
}
