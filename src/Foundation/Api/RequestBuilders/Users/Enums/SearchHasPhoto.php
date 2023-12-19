<?php

namespace Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Enums;

/**
 * Consider the presence of a photo.
 *
 * @package Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Enums
 *
 * @link    https://dev.vk.com/en/method/users.search
 */
enum SearchHasPhoto: int
{
    /**
     * @var int Search only for users with a photo.
     */
    case YES = 1;

    /**
     * @var int Search for all users.
     */
    case NO = 0;
}
