<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', \App\Http\Controllers\Api\HomeController::class)
    ->name('Index');

Route::middleware('guest')
    ->post('/account/register', \App\Packages\Account\Http\RegisterAccountController::class)
    ->name('RegisterAccount');
