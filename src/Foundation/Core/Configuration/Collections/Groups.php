<?php

namespace Hopex\VkSdk\Foundation\Core\Configuration\Collections;

use Hopex\VkSdk\Foundation\Core\Configuration\Models\Group;

/**
 * Groups.
 *
 * @method Group[] all()
 *
 * @package Hopex\VkSdk\Foundation\Core\Configuration\Collections
 */
class Groups extends Collection
{
    protected string $rootKey = 'groups';

    protected string $modelClass = Group::class;
}
