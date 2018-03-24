<?php

namespace EKejaksaan\Lapdu\Http\Controllers\Operator;

use EKejaksaan\Core\Models\Institution;
use EKejaksaan\Lapdu\Models\Report;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $new = Report::where('putusan', NULL)
            ->where('reporteds', '!=', NULL)
            ->where('reporters', '!=', NULL)
            ->get();
        return view('lapdu::lapdu.list', compact('new'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = new Report();
        $data->save();
        return view('lapdu::lapdu.create', compact('data'));
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
        $data = Report::find($id);
        return $data ? view('lapdu::lapdu.view', compact('data')) : redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Report::find($id);
        return $data ? view('lapdu::lapdu.edit', compact('data')) : redirect()->back();
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
        $input = $request->except(['_method', '_token']);

        foreach ($input as $k => $i) {
            if ($k != 'files') {
                $data->$k = $i;
            } else {
                $items = [];

                foreach ($i as $u) {
                    $items[] = [
                        'filename' => $u->getClientOriginalName(),
                        'extension' => $u->getClientOriginalExtension(),
                        'size' => $u->getClientSize(),
                        'path' => $u->store('files')
                    ];
                }

                if (!$data->files) {
                    $data->files = [];
                }

                $files = $data->files;
                $files = array_merge($files, $items);
                $data->files = $files;
                $data->update();
                return redirect()->route('lapdu.operator.laporan.edit', ['id' => $id]);
            }
        }

        $data->save();
        return redirect()->route('lapdu.operator.laporan.index');
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
        $institutions = Institution::get();
        return $data ? view('lapdu::lapdu.disposisi', compact('data', 'institutions')) : redirect()->back();
    }

    public function warrant($id)
    {
        $data = Report::find($id);
        return $data ? view('lapdu::surat.sp_was1_create', compact('data')) : redirect()->back();
    }

    public function study($id)
    {
        $data = Report::find($id);
        return $data ? view('lapdu::surat.was1_create', compact('data')) : redirect()->back();
    }
}