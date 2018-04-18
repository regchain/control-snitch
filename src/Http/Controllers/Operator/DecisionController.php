<?php

namespace Regchain\ControlSnitch\Http\Controllers\Operator;

use EKejaksaan\Core\Models\Punishment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DecisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $type = $request->get('status');

        switch ($type) {
            case 'berat':
                $data = Punishment::where('status', 'BERAT');
                break;

            case 'ringan':
                $data = Punishment::where('status', 'RINGAN');
                break;

            case 'berhenti':
                $data = Punishment::where('status', 'BERHENTI SEMENTARA');
                break;

            case 'sedang':
                $data = Punishment::where('status', 'SEDANG');
                break;
            case '-semua-':
                $data = Punishment::where('status', 'LIKE', '%');
                break;
        }

        $data = $data->get();
        return view('lapdu::subyek.putusan', compact('data'));
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