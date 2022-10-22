<?php

namespace Hopex\VkSdk\Foundation\Core\Api;

/**
 * Class Languages
 * @package Hopex\VkSdk\Foundation\Core\Api
 */
enum Languages: string
{
    case Russian = 'ru';
    case English = 'en';

    // TODO: Добавить транслитерацию для остальных языков

    // case Belorussian = 'be';
    // case Spanish = 'es';
    // case Finnish = 'fi';
    // case German = 'de';
    // case Italian = 'it';
}
