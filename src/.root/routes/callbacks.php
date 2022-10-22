<?php

use Hopex\VkSdk\Facades\SdkConfig;
use Hopex\VkSdk\Services\CallbackEventService;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| The entry point for VK API Callback POST requests.
|--------------------------------------------------------------------------
| The address is extracted from the configuration file. By default, 'connect'.
| Example your default endpoint: https://example.com/api/connect
| For check this, use command: <php artisan route:list>
| For fire this route, use <route('vk.entry')>
|
| See more: https://dev.vk.com/api/callback/getting-started
 */

Route::prefix('api')->name('vk.')->group(function () {

    Route::post(SdkConfig::routes('entry'), function (CallbackEventService $callback) {
        return response($callback->division(), 200, ['content-type' => 'application/json;charset=utf-8', 'charset' => 'utf-8']);
    })->name('entry');

});
