<?php

namespace Hopex\VkSdk\Providers;

use Hopex\VkSdk\Services\CallbackEventsService;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class BindingServiceProvider extends BaseServiceProvider
{
    public function register(): void
    {
        $this->app->bind(CallbackEventsService::class);
    }
}
