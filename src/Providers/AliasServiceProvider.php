<?php

namespace Hopex\VkSdk\Providers;

use Hopex\VkSdk\Foundation\Api\Entities\Basic\PrivateMessage;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class AliasServiceProvider extends BaseServiceProvider
{
    public function register(): void
    {
        $aliasLoader = AliasLoader::getInstance();

        $aliasLoader->alias('message', PrivateMessage::class);
    }
}
