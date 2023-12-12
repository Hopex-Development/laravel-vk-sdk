<?php

namespace Hopex\VkSdk\Providers;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class PublishingServiceProvider extends BaseServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../vendor/config/' => config_path('/'),
        ], 'vk-sdk-config');

        $this->publishes([
            __DIR__ . '/../vendor/lang/' => $this->app->langPath('/'),
        ], 'vk-sdk-lang');

        $this->publishes([
            __DIR__ . '/../vendor/storage/schemes' => $this->app->storagePath('app/vk-sdk/schemes'),
        ], 'vk-sdk-storage');

        $this->publishes([
            __DIR__ . '/../vendor/database/' => $this->app->databasePath(),
        ], 'vk-sdk-database');
    }
}
