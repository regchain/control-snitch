<?php

namespace EKejaksaan\Lapdu\Http\Controllers\Api;

use EKejaksaan\Lapdu\Models\Report;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReporterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('tes');
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
        $reporter = [
            'name' => $request->get('name'),
            'birthday' => $request->get('birthday'),
            'job' => $request->get('job'),
            'organization' => $request->get('organization'),
            'handphone' => $request->get('handphone'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'address' => $request->get('address'),
            'zipcode' => $request->get('zipcode'),
            'city' => $request->get('city'),
            'province' => $request->get('province'),
            'status' => $request->has('status') ? $request->get('status') : 'pelapor'
        ];

        if (!$data->reporters) {
            $data->reporters = [];
        }

        $reporters = $data->reporters;
        array_push($reporters, $reporter);
        $data->reporters = $reporters;
        $data->update();

        return $reporter;
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