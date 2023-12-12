<?php

namespace Hopex\VkSdk\Foundation\Core\Configuration\Collections;

use Hopex\VkSdk\Foundation\Core\Configuration\Models\Application;

/**
 * Applications.
 *
 * @method Application[] all()
 *
 * @package Hopex\VkSdk\Foundation\Core\Configuration\Collections
 */
class Applications extends Collection
{
    protected string $rootKey = 'applications';

    protected string $modelClass = Application::class;
}
