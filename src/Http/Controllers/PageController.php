<?php

namespace Regchain\ControlSnitch\Http\Controllers;

use Regchain\ControlSnitch\Models\Report;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    public function question($page, Request $request)
    {
        switch ($page) {
            case 1:
                $data = new Report();
                $data->save();
                return view('lapdu::guest.pages.question1', compact('data'));
                break;

            case 2:
                if ($request->has('id')) {
                    $data = Report::find($request->get('id'));

                    if ($data) {
                        return view('lapdu::guest.pages.question2', compact('data'));
                    }
                }

                return redirect()->route('lapdu.question', ['page' => 1]);
                break;

            case 3:
                if ($request->has('id')) {
                    $data = Report::find($request->get('id'));

                    if ($data) {
                        return view('lapdu::guest.pages.question3', compact('data'));
                    }
                }

                return redirect()->route('lapdu.question', ['page' => 1]);
                break;

            case 4:
                if ($request->has('id')) {
                    $data = Report::find($request->get('id'));

                    if ($data) {
                        return view('lapdu::guest.pages.question4', compact('data'));
                    }
                }

                return redirect()->route('lapdu.question', ['page' => 1]);
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