<?php

namespace EKejaksaan\Lapdu\Http\Controllers\Operator;

use EKejaksaan\Lapdu\Models\Report;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type = null)
    {
        $data = Report::where('reporteds', '!=', NULL)
            ->where('reporters', '!=', NULL);

        switch ($type) {
            case 'terlapor':
                $data = $data->where('analysis', NULL);
                break;

            case 'klarifikasi':
                $data = $data->where('date_warrant', '!=', NULL)
                    ->where('date_warrant_2', NULL);
                break;

            case 'inspeksi':
                $data = $data->where('date_warrant_2', '!=', NULL);
                break;

            default:
                # code...
                break;
        }

        $data = $data->get();
        return view('lapdu::subyek.'.$type, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}