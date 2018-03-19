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
            'terlapor' => Report::count(),
            'laporan' => Report::count()
        ];

        return view('lapdu::operator.home', compact('data'));
    }
}