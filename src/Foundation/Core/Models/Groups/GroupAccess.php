<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Groups;

/**
 * Class GroupAccess
 * @package Hopex\VkSdk\Foundation\Core\Models\Groups
 */
enum GroupAccess: int
{
	case _PRIVATE = 2;
    case CLOSED = 1;
    case OPEN = 0;
}
