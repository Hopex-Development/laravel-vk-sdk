<?php

namespace Hopex\VkSdk\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Server
 * @package Hopex\VkSdk\Facades
 */
class Server extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return \Hopex\VkSdk\Foundation\Server::class;
    }
}
