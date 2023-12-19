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
     * @var int A woman.
     */
    case FEMALE = 1;

    /**
     * @var int The woman.
     */
    case MALE = 2;

    /**
     * @var int All of them (default).
     */
    case ALL = 0;
}
