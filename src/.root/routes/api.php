<?php

use Hopex\VkSdk\Facades\SdkConfig;
use Hopex\VkSdk\Foundation\Core\Entities\SourceBans\Admin;
use Hopex\VkSdk\Services\CallbackEventsService;
use Hopex\VkSdk\Services\ServerEventsService;
use Hopex\VkSdk\Services\SourceBansService;
use Illuminate\Support\Facades\Route;

Route::prefix('api')->name('vk-sdk.')->group(function () {

    Route::post(SdkConfig::routes('group'), function (CallbackEventsService $callbackEventsService) {
        return response($callbackEventsService->divide(), 200, [
            'content-type' => 'application/json;charset=utf-8',
            'charset' => 'utf-8'
        ]);
    })->name('group');

    Route::post(SdkConfig::routes('server'), function (ServerEventsService $serverEventsService) {
        return response($serverEventsService->divide(), 200, [
            'content-type' => 'application/json;charset=utf-8',
            'charset' => 'utf-8'
        ]);
    })->name('server');

//    Route::prefix('sb')->name('sb.')->group(function () {
//
//        Route::get('admins', function (SourceBansService $sourceBansService) {
//            return response($sourceBansService
//                ->getAdmins()
//                ->filter(function (Admin $admin) {
//                    return !empty($admin->getEmail());
//                })
//                ->map(function (Admin $admin) {
//                    return [
//                        'Имя' => $admin->getName(),
//                        'Комментарий' => $admin->getComment(),
//                        'Последний визит' => $admin
//                            ->getLastVisit()
//                            ?->translatedFormat('d M, Y года (Hч. iмин.)'),
//                    ];
//                }));
//        })->name('admins');
//
//    });

});
