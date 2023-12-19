<?php

namespace Hopex\VkSdk\Providers;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        # Register the Route service provider
        $this->app->register(RouteServiceProvider::class);

        # Register the Alias service provider
        $this->app->register(AliasServiceProvider::class);

        # Register the Binding service provider
        $this->app->register(BindingServiceProvider::class);

        # Register the Publishing service provider
        $this->app->register(PublishingServiceProvider::class);
    }
}
