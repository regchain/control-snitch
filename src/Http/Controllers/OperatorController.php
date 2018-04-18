<?php

namespace Regchain\ControlSnitch\Http\Controllers;

use Regchain\ControlSnitch\Models\Report;
use EKejaksaan\Core\Models\Punishment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function index()
    {
        $data = [
            'ringan' => Report::where('status', 'ringan')->count(),
            'sedang' => Report::where('status', 'sedang')->count(),
            'berat' => Report::where('status', 'berat')->count(),
            'berhenti' => Report::where('status', 'berhenti')->count(),
            'terlapor' => Report::where('reporteds', '!=', NULL)
                ->where('reporters', '!=', NULL)
                ->where('lapdu.date_warrant', NULL)
                ->count(),
            'terklarifikasi' => Report::where('lapdu.date_warrant', '!=', NULL)
                ->where('klarifikasi.date_warrant', NULL)
                ->count(),
            'terinspeksi' => Report::where('klarifikasi.date_warrant', '!=', NULL)
                ->count(),
            'laporan' => Report::where('reporteds', '!=', NULL)
                ->where('reporters', '!=', NULL)
                ->where('lapdu.date_warrant', NULL)
                ->count(),
            'klarifikasi' => Report::where('lapdu.date_warrant', '!=', NULL)
                ->where('klarifikasi.date_warrant', NULL)
                ->count(),
            'inspeksi' => Report::where('klarifikasi.date_warrant', '!=', NULL)
                ->count(),
            'ringan' => Punishment::where('status', 'RINGAN')->count(),
            'sedang' => Punishment::where('status', 'SEDANG')->count(),
            'berat' => Punishment::where('status', 'BERAT')->count(),
            'berhenti' => Punishment::where('status', 'BERHENTI SEMENTARA')->count(),
        ];

        return view('lapdu::operator.home', compact('data'));
    }
}