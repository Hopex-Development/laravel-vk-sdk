<?php

namespace Hopex\VkSdk\Providers;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

/**
 * Describes the components that are available for publication.
 *
 * @package Hopex\VkSdk\Providers
 */
class PublishingServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the components of the application for publication.
     *
     * @return void
     */
    public function boot(): void
    {
        # Publish the configuration files from the vendor directory to the config directory
        $this->publishes([
            __DIR__ . '/../vendor/config/' => config_path('/'),
        ], 'vk-sdk-config');

        # Publish the language files from the vendor directory to the language path
        $this->publishes([
            __DIR__ . '/../vendor/lang/' => $this->app->langPath('/'),
        ], 'vk-sdk-lang');

        # Publish the storage schemes from the vendor directory to the storage path
        $this->publishes([
            __DIR__ . '/../vendor/storage/schemes' => $this->app->storagePath('app/vk-sdk/schemes'),
        ], 'vk-sdk-storage');

        # Publish the database files from the vendor directory to the database path
        $this->publishes([
            __DIR__ . '/../vendor/database/' => $this->app->databasePath(),
        ], 'vk-sdk-database');

        # Publish the test files from the vendor directory to the tests path
        $this->publishes([
            __DIR__ . '/../vendor/tests/' => $this->app->basePath('tests/Unit'),
        ], 'vk-sdk-tests');
    }
}
