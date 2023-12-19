<?php

namespace Hopex\VkSdk\Facades;

use Hopex\VkSdk\Foundation\Api\Methods\Account;
use Hopex\VkSdk\Foundation\Api\Methods\Users;
use Hopex\VkSdk\Foundation\Api\VkApi as BaseVkApi;
use Illuminate\Support\Facades\Facade;

/**
 * See description for {@see BaseVkApi}.
 *
 * @method static Users users()
 * @method static Account account()
 *
 * @package Hopex\VkSdk\Facades
 */
class VkApi extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return BaseVkApi::class;
    }
}
