<?php

use Hopex\VkSdk\Facades\SdkConfig;
use Hopex\VkSdk\Services\CallbackEventService;
use Illuminate\Support\Facades\Route;

Route::prefix('api')->name('vk.')->group(function () {

    Route::post(SdkConfig::routes('entry'), function (CallbackEventService $callback) {
        return response($callback->division(), 200, [
            'content-type' => 'application/json;charset=utf-8',
            'charset' => 'utf-8'
        ]);
    })->name('entry');

});
