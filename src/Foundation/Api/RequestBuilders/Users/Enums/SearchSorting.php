<?php

namespace Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Enums;

/**
 * Sorting the results.
 *
 * @package Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Enums
 *
 * @link https://dev.vk.com/en/method/users.search
 */
enum SearchSorting: int
{
    /**
     * @var int By date of registration.
     */
    case DATE = 1;

    /**
     * @var int By popularity.
     */
    case POPULARITY = 0;
}
