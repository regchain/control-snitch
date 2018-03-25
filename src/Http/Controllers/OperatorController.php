<?php

namespace EKejaksaan\Lapdu\Http\Controllers;

use EKejaksaan\Lapdu\Models\Report;
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
                ->where('date_warrant', NULL)
                ->count(),
            'terklarifikasi' => Report::where('date_warrant', '!=', NULL)
                ->where('date_warrant_2', NULL)
                ->count(),
            'terinspeksi' => Report::where('date_warrant_2', '!=', NULL)
                ->count(),
            'laporan' => Report::where('reporteds', '!=', NULL)
                ->where('reporters', '!=', NULL)
                ->where('date_warrant', NULL)
                ->count(),
            'klarifikasi' => Report::where('date_warrant', '!=', NULL)
                ->where('date_warrant_2', NULL)
                ->count(),
            'inspeksi' => Report::where('date_warrant_2', '!=', NULL)
                ->count()
        ];

        return view('lapdu::operator.home', compact('data'));
    }
}