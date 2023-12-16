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
     * The Russian language.
     *
     * @var string
     */
    case RUSSIAN = 'ru';

    /**
     * The English language.
     *
     * @var string
     */
    case ENGLISH = 'en';

    /**
     * The Belorussian language.
     *
     * @var string
     */
    case BELORUSSIAN = 'be';

    /**
     * The Spanish language.
     *
     * @var string
     */
    case SPANISH = 'es';

    /**
     * The Finnish language.
     *
     * @var string
     */
    case FINNISH = 'fi';

    /**
     * The German language.
     *
     * @var string
     */
    case GERMAN = 'de';

    /**
     * The Italian language.
     *
     * @var string
     */
    case ITALIAN = 'it';
}
