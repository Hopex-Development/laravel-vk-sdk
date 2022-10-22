<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Groups;

/**
 * Class GroupAudio
 * @package Hopex\VkSdk\Foundation\Core\Models\Groups
 */
enum GroupAudio: int
{
	case DISABLED = 0;
	case LIMITED = 2;
	case OPEN = 1;
}
