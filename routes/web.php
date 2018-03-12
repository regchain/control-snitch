<?php

Route::prefix('lapdu')->group(function () {
    Route::get('/', 'EKejaksaan\Lapdu\Http\Controllers\HomeController@index')->name('lapdu.home');
});