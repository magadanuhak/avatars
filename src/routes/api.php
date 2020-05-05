<?php

use Illuminate\Support\Facades\Route;

Route::namespace('LaravelMerax\Avatars\App\Http\Controllers')
    ->prefix('api/v1/avatars')
    ->as('v1.avatars.')
    ->middleware(['api', 'auth:api'])
    ->group(static function () {
        Route::post('', 'Store')->name('store');
        Route::patch('', 'Update')->name('update');
        Route::get('{avatar}', 'Show')->name('show');
    });
