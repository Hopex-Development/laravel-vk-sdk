<?php

namespace Hopex\VkSdk\Foundation\Core\Configuration;

use Hopex\VkSdk\Foundation\Core\Configuration\Collections\Applications;
use Hopex\VkSdk\Foundation\Core\Configuration\Collections\Groups;
use Hopex\VkSdk\Foundation\Core\Configuration\Models\Api;
use Hopex\VkSdk\Foundation\Core\Configuration\Models\Logging\Log;

/**
 * Implements the processing of the configuration file.
 *
 * @package Hopex\VkSdk\Foundation\Core\Configuration
 */
class Config
{
    /**
     * API settings specified in the configuration file.
     *
     * @version SDK: 3
     *
     * @return Api
     */
    public function api(): Api
    {
        return new Api(config('vk-sdk.api'));
    }

    /**
     * Group settings specified in the configuration file.
     *
     * @version SDK: 3
     *
     * @return Groups
     */
    public function groups(): Groups
    {
        return new Groups();
    }

    /**
     * Application settings specified in the configuration file.
     *
     * @version SDK: 3
     *
     * @return Applications
     */
    public function applications(): Applications
    {
        return new Applications();
    }

    /**
     * Logging settings specified in the configuration file.
     *
     * @version SDK: 3
     *
     * @return Log
     */
    public function logging(): Log
    {
        return new Log(config('vk-sdk.logging'));
    }
}
