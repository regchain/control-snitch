<?php

Route::prefix('lapdu')->group(function () {
    Route::get('/', 'EKejaksaan\Lapdu\Http\Controllers\PageController@index')->name('lapdu.home');
    Route::get('cara_lapdu', 'EKejaksaan\Lapdu\Http\Controllers\PageController@lapdu')->name('lapdu.howtolapdu');
    Route::get('cara_whistle', 'EKejaksaan\Lapdu\Http\Controllers\PageController@whistle')->name('lapdu.howtowhistle');
    Route::get('lapor/{page}', 'EKejaksaan\Lapdu\Http\Controllers\PageController@question')->name('lapdu.question');
    Route::get('kawal', 'EKejaksaan\Lapdu\Http\Controllers\PageController@trace')->name('lapdu.trace');
    Route::resource('report', 'EKejaksaan\Lapdu\Http\Controllers\ReportController', ['as' => 'lapdu']);

    Route::prefix('operator')->middleware('web', 'auth')->group(function() {
        Route::get('/', 'EKejaksaan\Lapdu\Http\Controllers\OperatorController@index')->name('lapdu.operator.home');
        Route::get('subyek/{type}', 'EKejaksaan\Lapdu\Http\Controllers\Operator\SubjectController@index')->name('lapdu.operator.subject');

        Route::resource('laporan', 'EKejaksaan\Lapdu\Http\Controllers\Operator\ReportController', ['as' => 'lapdu.operator']);
        Route::get('laporan/{id}/tindak-lanjut', 'EKejaksaan\Lapdu\Http\Controllers\Operator\ReportController@action')->name('lapdu.operator.laporan.action');
        Route::get('laporan/{id}/telaahan', 'EKejaksaan\Lapdu\Http\Controllers\Operator\ReportController@study')->name('lapdu.operator.laporan.study');
        Route::get('laporan/{id}/surat-perintah', 'EKejaksaan\Lapdu\Http\Controllers\Operator\ReportController@warrant')->name('lapdu.operator.laporan.warrant');

        Route::resource('klarifikasi', 'EKejaksaan\Lapdu\Http\Controllers\Operator\ClarificationController', ['as' => 'lapdu.operator']);
        Route::get('klarifikasi/{id}/tindak-lanjut', 'EKejaksaan\Lapdu\Http\Controllers\Operator\ClarificationController@action')->name('lapdu.operator.klarifikasi.action');
        Route::get('klarifikasi/{id}/wawancara', 'EKejaksaan\Lapdu\Http\Controllers\Operator\ClarificationController@interview')->name('lapdu.operator.klarifikasi.interview');
        Route::get('klarifikasi/{id}/surat-perintah', 'EKejaksaan\Lapdu\Http\Controllers\Operator\ClarificationController@warrant')->name('lapdu.operator.klarifikasi.warrant');
    });
});