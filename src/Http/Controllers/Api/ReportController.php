<?php

namespace Regchain\ControlSnitch\Http\Controllers\Api;

use Regchain\ControlSnitch\Models\Report;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ReportController extends Controller
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
        $data = Report::find($id);
        $input = $request->except('_method');

        foreach ($input as $k => $i) {
            if ($k != 'files') {
                if (in_array($k, ['lapdu', 'klarifikasi'])) {
                    foreach ($i as $ki => $item) {
                        if (str_contains($ki, 'date')) {
                            $i[$ki] = Carbon::parse($item)->setTimezone('Asia/Jakarta');
                        }
                    }

                    if (!$data->$k) {
                        $data->$k = [];
                    }

                    $data->$k = array_merge($data->$k, $i);
                } else {
                    $data->$k = $i;
                }
            } else {
                $paths = [];

                foreach ($i as $u) {
                    $paths[] = $u->store('files');
                }

                if (!$data->files) {
                    $data->files = [];
                }

                $files = $data->files;
                $files = array_merge($files, $paths);
                $data->files = $files;
                $data->update();
            }
        }

        $data->save();
        return response()->json([]);
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

    public function action($id)
    {
        $data = Report::find($id);
        return $data ? view('control-snitch::lapdu.disposisi', compact('data')) : redirect()->back();
    }
}