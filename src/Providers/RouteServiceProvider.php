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
     * This method loads the application routes from two separate files:
     *  - `api.php` for API routes.
     *  - `web.php` for web routes.
     *
     * @return void
     */
    public function boot(): void
    {
        # Load API routes
        $this->loadRoutesFrom(__DIR__ . '/../vendor/routes/api.php');

        # Load web routes
        $this->loadRoutesFrom(__DIR__ . '/../vendor/routes/web.php');
    }
}
