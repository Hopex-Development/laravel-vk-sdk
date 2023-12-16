<?php

namespace Hopex\VkSdk\Providers;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

/**
 * Describes the application routes to be used by runtime.
 *
 * @package Hopex\VkSdk\Providers
 */
class RouteServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap application routes.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../vendor/routes/api.php');
        $this->loadRoutesFrom(__DIR__ . '/../vendor/routes/web.php');
    }
}
