<?php

namespace Hopex\VkSdk\Providers;

use Hopex\VkSdk\Foundation\Api\Entities\Basic\PrivateMessage;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

/**
 * Specifies aliases for dynamic entities.
 *
 * @package Hopex\VkSdk\Providers
 */
class AliasServiceProvider extends BaseServiceProvider
{
    /**
     * @var AliasLoader The instance of the alias loader.
     */
    private AliasLoader $aliasLoader;

    /**
     * {@inheritdoc}
     */
    public function __construct($app)
    {
        # Set the instance of the alias loader
        $this->aliasLoader = AliasLoader::getInstance();

        parent::__construct($app);
    }

    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        # Alias the 'PrivateMessage' class to 'message'
        $this->aliasLoader->alias('message', PrivateMessage::class);
    }
}
