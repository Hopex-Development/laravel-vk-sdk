<?php

use GuzzleHttp\Client;
use Hopex\VkSdk\Foundation\Core\Configuration\Config;
use Hopex\VkSdk\Models\Application;
use Hopex\VkSdk\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('auth/callback', function (Request $request) {
    $payload = json_decode($request->get('payload'), true);

    User::updateOrCreate([
        'user_id' => data_get($payload, 'user.id'),
    ], array_merge($payload, data_get($payload, 'user')));

    $response = Http::setClient(new Client(['verify' => false]))
        ->get('https://api.vk.com/method/auth.exchangeSilentAuthToken', [
            'v' => (new Config())->api()->version(),
            'token' => data_get($payload, 'token'),
            'access_token' => Application::first()->service_access_key,
            'uuid' => data_get($payload, 'uuid'),
        ])->body();
    $response = data_get(json_decode($response, true), 'response');

    User::updateOrCreate(
        [
            'user_id' => data_get($response, 'user_id'),
        ],
        collect($response)->only([
            'phone',
            'phone_validated',
            'additional_signup_required',
            'is_service',
            'email',
            'source',
            'source_description',
            'access_token',
            'access_token_id',
            'expires_in',
        ])->toArray()
    );

    return redirect()->route('login');
});
