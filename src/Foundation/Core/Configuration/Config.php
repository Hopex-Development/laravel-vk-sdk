<?php

namespace Hopex\VkSdk\Foundation\Core\Configuration;

use Hopex\VkSdk\Foundation\Core\Configuration\Collections\Applications;
use Hopex\VkSdk\Foundation\Core\Configuration\Collections\Groups;
use Hopex\VkSdk\Foundation\Core\Configuration\Models\Api;
use Hopex\VkSdk\Foundation\Core\Configuration\Models\Logging\Log;

/**
 * Config.
 *
 * @package Hopex\VkSdk\Foundation\Core\Configuration
 */
class Config
{
    public function api(): Api
    {
        return new Api(config('vk-sdk.api'));
    }

    public function groups(): Groups
    {
        return new Groups();
    }

    public function applications(): Applications
    {
        return new Applications();
    }

    public function logging(): Log
    {
        return new Log(config('vk-sdk.logging'));
    }
}
