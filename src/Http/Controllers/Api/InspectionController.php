<?php

namespace Regchain\ControlSnitch\Http\Controllers\Api;

use Regchain\ControlSnitch\Models\Report;
use EKejaksaan\Core\Models\Punishment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InspectionController extends Controller
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
        $items = Punishment::where('report_id', $id)
            ->get();
        $input = $request->except('_method', 'report_id');
        $status = 400;
        $temp = [];

        if (!$items->isEmpty()) {
            foreach ($items as $k => $p) {
                foreach ($input as $key => $i) {
                    foreach ($i as $l => $v) {
                        if ($k == $l) {
                            $temp[$k][$key] = $v;
                        }
                    }
                }
            }

            foreach ($items as $k => $p) {
                $p->update($temp[$k]);
            }

            $status = 200;
        }

        return response()->json([], $status);
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