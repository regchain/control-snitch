<?php

Route::prefix('api')->group(function() {
    Route::prefix('lapdu')->as('api.lapdu.')->group(function () {
        Route::resources([
            'reporter' => 'EKejaksaan\Lapdu\Http\Controllers\Api\ReporterController',
            'reported' => 'EKejaksaan\Lapdu\Http\Controllers\Api\ReportedController',
        ]);
    });
});