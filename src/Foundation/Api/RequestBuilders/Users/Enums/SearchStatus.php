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
     * Unmarried (not married).
     */
    case UNMARRIED = 1;

    /**
     * Meet.
     */
    case MEET = 2;

    /**
     * Engaged.
     */
    case ENGAGED = 3;

    /**
     * Married.
     */
    case MARRIED = 4;

    /**
     * It's complicated.
     */
    case COMPLICATED = 5;

    /**
     * In an active search.
     */
    case ACTIVE_SEARCH = 6;

    /**
     * 7 — влюблен(-а)
     */
    case FOLLOWS = 7;

    /**
     * In a civil marriage.
     */
    case CIVIL_MARRIAGE = 8;
}
