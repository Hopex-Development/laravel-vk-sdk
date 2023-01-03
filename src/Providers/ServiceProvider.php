<?php

namespace Hopex\VkSdk\Providers;

use Hopex\VkSdk\Foundation\Core\Api\Client;
use Hopex\VkSdk\Foundation\Core\Models\RequestFields;
use Hopex\VkSdk\Foundation\Format;
use Hopex\VkSdk\Foundation\SdkConfig;
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

        $this->app->bind('sdkconfig', SdkConfig::class);
        $this->app->bind('format', Format::class);
        $this->app->bind('vkapi', Client::class);
        $this->app->bind('requestfields', RequestFields::class);
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
        ], 'vk-sdk-lang-ru');

        $this->loadMigrationsFrom(__DIR__.'/../.root/database/migrations');

        $this->loadRoutesFrom(__DIR__ . '/../.root/routes/callbacks.php');
    }
}
