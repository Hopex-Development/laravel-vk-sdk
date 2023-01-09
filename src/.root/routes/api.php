<?php

use Hopex\VkSdk\Facades\SdkConfig;
use Hopex\VkSdk\Services\CallbackEventsService;
use Hopex\VkSdk\Services\ServerEventsService;
use Illuminate\Support\Facades\Route;

Route::prefix('api')->name('vk.')->group(function () {

    Route::post(SdkConfig::routes('group'), function (CallbackEventsService $callback) {
        return response($callback->divide(), 200, [
            'content-type' => 'application/json;charset=utf-8',
            'charset' => 'utf-8'
        ]);
    })->name('group');

    Route::post(SdkConfig::routes('server'), function (ServerEventsService $request) {
        return response($request->divide(), 200, [
            'content-type' => 'application/json;charset=utf-8',
            'charset' => 'utf-8'
        ]);
    })->name('server');

});
