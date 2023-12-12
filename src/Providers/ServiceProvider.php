<?php

namespace Hopex\VkSdk\Providers;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function register(): void
    {
        $this->app->register(RouteServiceProvider::class);
        $this->app->register(AliasServiceProvider::class);
        $this->app->register(BindingServiceProvider::class);
        $this->app->register(PublishingServiceProvider::class);
    }
}
