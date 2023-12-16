<?php

namespace Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Enums;

/**
 * The type of complaint may take the following meanings.
 *
 * @package Hopex\VkSdk\Foundation\Api\RequestBuilders\Users\Enums
 *
 * @link https://dev.vk.com/ru/method/users.report
 */
enum ReportType: string
{
    /**
     * @var string Pornography.
     */
    case PORN = 'porn';

    /**
     * @var string Sending spam.
     */
    case SPAM = 'spam';

    /**
     * @var string Offensive behaviour.
     */
    case INSULT = 'insult';

    /**
     * @var string An advertising page that clogs the search.
     */
    case ADVERTISEMENT = 'advertisement';
}
