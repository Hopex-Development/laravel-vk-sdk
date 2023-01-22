<?php

namespace Hopex\VkSdk\Providers;

use Hopex\VkSdk\Contracts\LocalPlayersServiceContract;
use Hopex\VkSdk\Contracts\SourceBansServiceContract;
use Hopex\VkSdk\Foundation\Core\Api\Client;
use Hopex\VkSdk\Foundation\Core\Entities\RequestFields;
use Hopex\VkSdk\Foundation\Core\Sources\Keyboard;
use Hopex\VkSdk\Foundation\Core\Sources\Note;
use Hopex\VkSdk\Foundation\Format;
use Hopex\VkSdk\Foundation\SdkConfig;
use Hopex\VkSdk\Services\CallbackEventsService;
use Hopex\VkSdk\Services\LocalPlayersService;
use Hopex\VkSdk\Services\ServerEventsService;
use Hopex\VkSdk\Services\SourceBansService;
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
        $this->app->bind(CallbackEventsService::class);
        $this->app->bind(ServerEventsService::class);
        $this->app->bind(SourceBansServiceContract::class, SourceBansService::class);
        $this->app->bind(LocalPlayersServiceContract::class, LocalPlayersService::class);

        $this->app->bind('sdkconfig', SdkConfig::class);
        $this->app->bind('vkapi', Client::class);
        $this->app->bind('requestfields', RequestFields::class);
        $this->app->bind('keyboard', Keyboard::class);
        $this->app->bind('note', Note::class);
    }

    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../Console/Commands/' => app_path('Console/Commands/'),
        ], 'vk-sdk-console');

        $this->publishes([
            __DIR__ . '/../.root/config/' => config_path('/'),
        ], 'vk-sdk-config');

        $this->publishes([
            __DIR__ . '/../.root/lang/' => $this->app->langPath('/'),
        ], 'vk-sdk-lang');

        $this->publishes([
            __DIR__ . '/../.root/storage/sdk/keyboards' => $this->app->storagePath('app/vk-sdk/keyboards'),
            __DIR__ . '/../.root/storage/sdk/notes' => $this->app->storagePath('app/vk-sdk/notes'),
        ], 'vk-sdk-sources');

        if (config('vk-sdk')) {
            config(['database.connections.source-bans' => config('vk-sdk.source-bans.connection')]);
        }

        $this->publishes([
            __DIR__ . '/../.root/database/migrations/' => $this->app->databasePath('migrations'),
        ], 'vk-sdk-database');

        $this->loadRoutesFrom(__DIR__ . '/../.root/routes/api.php');
    }
}
