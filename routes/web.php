<?php

Route::prefix('lapdu')->group(function () {
    Route::get('/', 'EKejaksaan\Lapdu\Http\Controllers\PageController@index')->name('lapdu.home');
    Route::get('cara_lapdu', 'EKejaksaan\Lapdu\Http\Controllers\PageController@lapdu')->name('lapdu.howtolapdu');
    Route::get('cara_whistle', 'EKejaksaan\Lapdu\Http\Controllers\PageController@whistle')->name('lapdu.howtowhistle');
    Route::get('lapor/{page}', 'EKejaksaan\Lapdu\Http\Controllers\PageController@question')->name('lapdu.question');
    Route::get('kawal', 'EKejaksaan\Lapdu\Http\Controllers\PageController@trace')->name('lapdu.trace');
    Route::resource('report', 'EKejaksaan\Lapdu\Http\Controllers\ReportController', [
        'as' => 'lapdu'
    ]);

    Route::prefix('operator')->middleware('web')->group(function() {
        Route::get('/', 'EKejaksaan\Lapdu\Http\Controllers\OperatorController@index')->name('lapdu.operator.home');
    });
});