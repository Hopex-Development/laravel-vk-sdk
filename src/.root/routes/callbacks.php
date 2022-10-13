<?php

use Hopex\VkSdk\Facades\Configure;
use Hopex\VkSdk\Services\CallbackEventService;
use Illuminate\Support\Facades\Route;

/**
 * Входная точка для VK API Callback POST запросов.
 * Адрес извлекается из файла конфигурации. По умолчанию 'connect'.
 *
 * @example https://example.com/api/connect
 * @code route('api.entry')
 */
Route::prefix('api')->post(Configure::routes('entry'), function (CallbackEventService $callback) {
    return response($callback->division());
})->name('api.entry');
