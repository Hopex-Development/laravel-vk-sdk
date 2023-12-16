<?php

namespace Hopex\VkSdk\Foundation\Core\Configuration\Collections;

use Hopex\VkSdk\Foundation\Core\Configuration\Models\Application;

/**
 * Collection of the applications (their configurations).
 *
 * @method Application[] all()
 *
 * @package Hopex\VkSdk\Foundation\Core\Configuration\Collections
 */
class Applications extends Collection
{
    /**
     * @inheritdoc
     */
    protected string $rootKey = 'applications';

    /**
     * @inheritdoc
     */
    protected string $modelClass = Application::class;
}
