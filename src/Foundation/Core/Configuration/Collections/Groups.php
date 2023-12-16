<?php

namespace Hopex\VkSdk\Foundation\Core\Configuration\Collections;

use Hopex\VkSdk\Foundation\Core\Configuration\Models\Group;

/**
 * Collection of the groups (their configurations).
 *
 * @method Group[] all()
 *
 * @package Hopex\VkSdk\Foundation\Core\Configuration\Collections
 */
class Groups extends Collection
{
    /**
     * @inheritdoc
     */
    protected string $rootKey = 'groups';

    /**
     * @inheritdoc
     */
    protected string $modelClass = Group::class;
}
