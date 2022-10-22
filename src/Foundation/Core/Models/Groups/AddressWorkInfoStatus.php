<?php

namespace Hopex\VkSdk\Foundation\Core\Models\Groups;

/**
 * Class AddressWorkInfoStatus
 * @package Hopex\VkSdk\Foundation\Core\Models\Groups
 */
enum AddressWorkInfoStatus: string
{
	case ALWAYS_OPENED = 'always_opened';
	case FOREVER_CLOSED = 'forever_closed';
	case NO_INFORMATION = 'no_information';
	case TEMPORARILY_CLOSED = 'temporarily_closed';
	case TIMETABLE = 'timetable';
}
