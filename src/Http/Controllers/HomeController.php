<?php

namespace EKejaksaan\Lapdu\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    public function index()
    {
        return view('lapdu::pelapor.home');
    }
}