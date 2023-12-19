<?php

namespace Hopex\VkSdk\Providers;

use Hopex\VkSdk\Services\CallbackEventsService;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

/**
 * Specifies bindings for the application container.
 *
 * @package Hopex\VkSdk\Providers
 */
class BindingServiceProvider extends BaseServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        # Bind the CallbackEventsService class to the application container
        $this->app->bind(CallbackEventsService::class);
    }
}
