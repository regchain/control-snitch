<?php

namespace Regchain\ControlSnitch\Http\Controllers\Api;

use EKejaksaan\Core\Models\Punishment;
use Regchain\ControlSnitch\Models\Report;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PunishmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $data = Report::find($request->get('report_id'));
        $status = 400;

        if ($data) {
            Punishment::create([
                'report_id' => $request->get('report_id'),
                'name' => $request->get('name'),
                'detail' => $request->get('detail'),
                'violation' => $request->get('violation'),
                'description' => $request->get('description'),
                'punishment' => $request->get('punishment')
            ]);
            $status = 200;
        }

        return response()->json([], $status);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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