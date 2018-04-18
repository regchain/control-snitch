<?php

namespace Regchain\ControlSnitch\Http\Controllers\Api;

use Regchain\ControlSnitch\Models\Report;
use EKejaksaan\Core\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportedController extends Controller
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
        $data = Report::find($request->get('id'));
        $user = User::find($request->get('reported-id'));
        $reported = [
            'name' => $user->name,
            'nip' => $user->nip,
            'nrp' => $user->nrp,
            'jobtitle' => $user->jobtitle,
            'institute' => $user->institute,
            'unit' => $user->unit,
            'position' => $request->get('position'),
            'status' => $request->get('status'),
            'handphone' => $request->has('handphone') ? $request->get('handphone') : null,
            'phone' => $request->has('phone') ? $request->get('phone') : null
        ];

        if (!$data->reporteds) {
            $data->reporteds = [];
        }

        $reporteds = $data->reporteds;
        array_push($reporteds, $reported);
        $data->reporteds = $reporteds;
        $data->update();

        return $reported;
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
        //
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