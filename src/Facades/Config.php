<?php

namespace Hopex\VkSdk\Facades;

use Hopex\VkSdk\Foundation\Core\Configuration\Collections\Applications;
use Hopex\VkSdk\Foundation\Core\Configuration\Collections\Groups;
use Hopex\VkSdk\Foundation\Core\Configuration\Models\Api;
use Hopex\VkSdk\Foundation\Core\Configuration\Models\Logging\Log;
use Illuminate\Support\Facades\Facade;
use Hopex\VkSdk\Foundation\Core\Configuration\Config as BaseConfig;

/**
 * See description for {@see BaseConfig}.
 *
 * @package Hopex\VkSdk\Facades
 *
 * @method static Api api
 * @method static Groups groups
 * @method static Applications applications
 * @method static Log logging
 */
class Config extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return BaseConfig::class;
    }
}
