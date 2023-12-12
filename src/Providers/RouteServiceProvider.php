<?php

namespace Hopex\VkSdk\Providers;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class RouteServiceProvider extends BaseServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../vendor/routes/api.php');
        $this->loadRoutesFrom(__DIR__ . '/../vendor/routes/web.php');
    }
}
