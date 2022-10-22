<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Groups;

/**
 * Class GroupAgeLimits
 * @package Hopex\VkSdk\Foundation\Core\Models\Groups
 */
enum GroupAgeLimits: int
{
	case _16_PLUS = 2;
    case _18_PLUS = 3;
    case UNLIMITED = 1;
}
