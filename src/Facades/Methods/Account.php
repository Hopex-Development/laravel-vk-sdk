<?php

namespace Hopex\VkSdk\Facades\Methods;

use Hopex\VkSdk\Foundation\Api\Methods\Account as _Account;
use Illuminate\Support\Facades\Facade;

/**
 * Account.
 *
 * @package Hopex\VkSdk\Facades\Methods
 *
 * todo добавить методы
 */
class Account extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return _Account::class;
    }
}
