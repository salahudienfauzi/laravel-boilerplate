<?php

use App\Http\Controllers\Backend\Log\LogController;

Route::group([
    'prefix' => 'log',
    'namespace' => 'Log',
    'middleware' => 'permission:log',
], function () {
        Route::get('/', [LogController::class, 'index'])->name('log.index');
});