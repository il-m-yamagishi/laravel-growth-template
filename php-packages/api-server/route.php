<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

// Healthcheck
Route::get('/', \LaravelGrowth\Http\Controllers\Api\HomeController::class)
    ->name('Index');

Route::group([
    'middleware' => 'guest',
], function (): void {
});
