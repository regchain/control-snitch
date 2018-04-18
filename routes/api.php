<?php

Route::prefix('api')->group(function() {
    Route::prefix('lapdu')->as('api.lapdu.')->group(function () {
        Route::resources([
            'report' => 'Regchain\ControlSnitch\Http\Controllers\Api\ReportController',
            'reporter' => 'Regchain\ControlSnitch\Http\Controllers\Api\ReporterController',
            'reported' => 'Regchain\ControlSnitch\Http\Controllers\Api\ReportedController',
            'examiner' => 'Regchain\ControlSnitch\Http\Controllers\Api\ExaminerController',
            'qna' => 'Regchain\ControlSnitch\Http\Controllers\Api\QnaController',
            'inspection' => 'Regchain\ControlSnitch\Http\Controllers\Api\InspectionController',
            'punishment' => 'Regchain\ControlSnitch\Http\Controllers\Api\PunishmentController',
        ]);
    });
});