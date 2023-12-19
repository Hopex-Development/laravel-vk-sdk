<?php

namespace Hopex\VkSdk\Foundation\Core\Enums;

/**
 * Implements an enumeration of the available languages in which the VK API returns the requested data.
 *
 * @package Hopex\VkSdk\Foundation\Core\Api
 */
enum Language: string
{
    /**
     * @var string The Russian language.
     */
    case RUSSIAN = 'ru';

    /**
     * @var string The English language.
     */
    case ENGLISH = 'en';

    /**
     * @var string The Belorussian language.
     */
    case BELORUSSIAN = 'be';

    /**
     * @var string The Spanish language.
     */
    case SPANISH = 'es';

    /**
     * @var string The Finnish language.
     */
    case FINNISH = 'fi';

    /**
     * @var string The German language.
     */
    case GERMAN = 'de';

    /**
     * @var string The Italian language.
     */
    case ITALIAN = 'it';
}
