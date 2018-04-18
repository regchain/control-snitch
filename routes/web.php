<?php

Route::prefix('lapdu')->group(function () {
    Route::get('/', 'Regchain\ControlSnitch\Http\Controllers\PageController@index')->name('lapdu.home');
    Route::get('cara_lapdu', 'Regchain\ControlSnitch\Http\Controllers\PageController@lapdu')->name('lapdu.howtolapdu');
    Route::get('cara_whistle', 'Regchain\ControlSnitch\Http\Controllers\PageController@whistle')->name('lapdu.howtowhistle');
    Route::get('lapor/{page}', 'Regchain\ControlSnitch\Http\Controllers\PageController@question')->name('lapdu.question');
    Route::get('kawal', 'Regchain\ControlSnitch\Http\Controllers\PageController@trace')->name('lapdu.trace');
    Route::resource('report', 'Regchain\ControlSnitch\Http\Controllers\ReportController', ['as' => 'lapdu']);

    Route::prefix('operator')->middleware('web', 'auth')->group(function() {
        Route::get('/', 'Regchain\ControlSnitch\Http\Controllers\OperatorController@index')->name('lapdu.operator.home');
        Route::get('subyek/{type}', 'Regchain\ControlSnitch\Http\Controllers\Operator\SubjectController@index')->name('lapdu.operator.subject');
        Route::resource('putusan', 'Regchain\ControlSnitch\Http\Controllers\Operator\DecisionController', ['as' => 'lapdu.operator']);

        Route::resource('laporan', 'Regchain\ControlSnitch\Http\Controllers\Operator\ReportController', ['as' => 'lapdu.operator']);
        Route::get('laporan/{id}/tindak-lanjut', 'Regchain\ControlSnitch\Http\Controllers\Operator\ReportController@action')->name('lapdu.operator.laporan.action');
        Route::get('laporan/{id}/telaahan', 'Regchain\ControlSnitch\Http\Controllers\Operator\ReportController@study')->name('lapdu.operator.laporan.study');
        Route::get('laporan/{id}/surat-perintah', 'Regchain\ControlSnitch\Http\Controllers\Operator\ReportController@warrant')->name('lapdu.operator.laporan.warrant');

        Route::resource('klarifikasi', 'Regchain\ControlSnitch\Http\Controllers\Operator\ClarificationController', ['as' => 'lapdu.operator']);
        Route::get('klarifikasi/{id}/tindak-lanjut', 'Regchain\ControlSnitch\Http\Controllers\Operator\ClarificationController@action')->name('lapdu.operator.klarifikasi.action');
        Route::get('klarifikasi/{id}/wawancara', 'Regchain\ControlSnitch\Http\Controllers\Operator\ClarificationController@interview')->name('lapdu.operator.klarifikasi.interview');
        Route::get('klarifikasi/{id}/surat-perintah', 'Regchain\ControlSnitch\Http\Controllers\Operator\ClarificationController@warrant')->name('lapdu.operator.klarifikasi.warrant');

        Route::resource('inspeksi', 'Regchain\ControlSnitch\Http\Controllers\Operator\InspectionController', ['as' => 'lapdu.operator']);
        Route::get('inspeksi/{id}/tindak-lanjut', 'Regchain\ControlSnitch\Http\Controllers\Operator\InspectionController@action')->name('lapdu.operator.inspeksi.action');
        Route::get('inspeksi/{id}/wawancara', 'Regchain\ControlSnitch\Http\Controllers\Operator\InspectionController@interview')->name('lapdu.operator.inspeksi.interview');
        Route::get('inspeksi/{id}/laporan', 'Regchain\ControlSnitch\Http\Controllers\Operator\InspectionController@report')->name('lapdu.operator.inspeksi.report');
        Route::get('inspeksi/{id}/surat-perintah', 'Regchain\ControlSnitch\Http\Controllers\Operator\InspectionController@warrant')->name('lapdu.operator.inspeksi.warrant');

        Route::resource('usulan', 'Regchain\ControlSnitch\Http\Controllers\Operator\UsulanController', ['as' => 'lapdu.operator']);
    });
});