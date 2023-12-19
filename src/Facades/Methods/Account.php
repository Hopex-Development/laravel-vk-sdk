<?php

namespace Hopex\VkSdk\Facades\Methods;

use Hopex\VkSdk\Foundation\Api\Methods\Account as BaseAccount;
use Illuminate\Support\Facades\Facade;

/**
 * See description for {@see BaseAccount}.
 *
 * @package Hopex\VkSdk\Facades\Methods
 *
 */
class Account extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return BaseAccount::class;
    }
}
