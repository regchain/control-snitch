<?php

namespace EKejaksaan\Lapdu\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class PageController extends Controller
{
    public function index()
    {
        return view('lapdu::home');
    }

    public function lapdu()
    {
        return view('lapdu::guest.pages.cara_lapdu');
    }

    public function whistle()
    {
        return view('lapdu::guest.pages.cara_whistle');
    }

    public function question($page)
    {
        switch ($page) {
            case 1:
                return view('lapdu::guest.pages.question1');
                break;

            case 2:
                return view('lapdu::guest.pages.question2');
                break;

            case 3:
                return view('lapdu::guest.pages.question3');
                break;

            case 4:
                return view('lapdu::guest.pages.question4');
                break;

            default:
                # code...
                break;
        }
        # code...
    }

    public function trace()
    {
        return view('lapdu::guest.pages.kawal');
    }
}