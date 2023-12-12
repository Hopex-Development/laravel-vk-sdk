<?php

namespace Hopex\VkSdk\Facades;

use Hopex\VkSdk\Foundation\Api\RequestBuilders\Account\AccountInfoRequestBuilder;
use Hopex\VkSdk\Foundation\Api\Responses\Account\AccountInfoResponse;
use Illuminate\Support\Facades\Facade;

/**
 * Account.
 *
 * @package Hopex\VkSdk\Facades
 *
 * @method static AccountInfoResponse getInfo(AccountInfoRequestBuilder $builder) Returns current account info.
 */
class Account extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Hopex\VkSdk\Foundation\Api\Methods\Account::class;
    }
}
