<?php

use Hopex\VkSdk\Facades\SdkConfig;
use Hopex\VkSdk\Services\CallbackEventsService;
use Hopex\VkSdk\Services\ServerEventsService;
use Illuminate\Support\Facades\Route;

Route::prefix('api')->name('vk-sdk.')->group(function () {

    Route::post('callback', function (CallbackEventsService $callbackEventsService) {
        return response($callbackEventsService->divide(), 200, [
            'content-type' => 'application/json',
            'charset' => 'utf-8'
        ]);
    })->name('group');

//    Route::post(SdkConfig::routes('server'), function (ServerEventsService $serverEventsService) {
//        return response($serverEventsService->divide(), 200, [
//            'content-type' => 'application/json;charset=utf-8',
//            'charset' => 'utf-8'
//        ]);
//    })->name('server');

});
