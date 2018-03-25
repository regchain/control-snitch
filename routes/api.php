<?php

Route::prefix('api')->group(function() {
    Route::prefix('lapdu')->as('api.lapdu.')->group(function () {
        Route::resources([
            'report' => 'EKejaksaan\Lapdu\Http\Controllers\Api\ReportController',
            'reporter' => 'EKejaksaan\Lapdu\Http\Controllers\Api\ReporterController',
            'reported' => 'EKejaksaan\Lapdu\Http\Controllers\Api\ReportedController',
            'examiner' => 'EKejaksaan\Lapdu\Http\Controllers\Api\ExaminerController',
            'qna' => 'EKejaksaan\Lapdu\Http\Controllers\Api\QnaController',
        ]);
    });
});