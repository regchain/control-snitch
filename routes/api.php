<?php

Route::prefix('api')->group(function() {
    Route::prefix('lapdu')->group(function () {
        Route::resource('reporter', 'EKejaksaan\Lapdu\Http\Controllers\Api\ReporterController', [
            'as' => 'api.lapdu'
        ]);
    });
});