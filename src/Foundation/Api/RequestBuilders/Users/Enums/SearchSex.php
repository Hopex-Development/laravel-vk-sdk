<?php

namespace Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Enums;

/**
 * Paul.
 *
 * @package Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Enums
 *
 * @link    https://dev.vk.com/en/method/users.search
 */
enum SearchSex: int
{
    /**
     * A woman.
     */
    case FEMALE = 1;

    /**
     * The woman.
     */
    case MALE = 2;

    /**
     * All of them (default).
     */
    case ALL = 0;
}
