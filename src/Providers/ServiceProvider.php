<?php

namespace Hopex\VkSdk\Providers;

use Hopex\VkSdk\Foundation\Configure;
use Hopex\VkSdk\Foundation\Core\GroupInstance;
use Hopex\VkSdk\Foundation\Formatters\BaseFormatter;
use Hopex\VkSdk\Services\CallbackEventService;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(CallbackEventService::class);

        $this->app->bind('configure', Configure::class);
        $this->app->bind('format', BaseFormatter::class);
        $this->app->bind('group', GroupInstance::class);
    }

    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../.root/config/vk-sdk.php' => config_path('vk-sdk.php'),
        ], 'vk-sdk-config');

        $this->publishes([
            __DIR__ . '/../.root/lang/ru.php' => $this->app->langPath('ru/vk-sdk.php'),
            __DIR__ . '/../.root/lang/en.php' => $this->app->langPath('en/vk-sdk.php'),
        ], 'vk-sdk-lang');

        $this->loadRoutesFrom(__DIR__ . '/../.root/routes/callbacks.php');
    }
}
