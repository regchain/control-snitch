<?php

namespace EKejaksaan\Lapdu\Http\Controllers\Operator;

use EKejaksaan\Core\Models\Institution;
use EKejaksaan\Core\Models\User;
use EKejaksaan\Lapdu\Models\Report;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClarificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $new = Report::where('date_warrant', '!=', NULL)
            ->get();

        $advanced = Report::where('interview', '!=', NULL)
            ->get();

        return view('lapdu::klarifikasi.list', compact('new', 'advanced'));
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
        $data = Report::find($id);
        return $data ? view('lapdu::klarifikasi.view', compact('data')) : redirect()->back();
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
        return $data ? view('lapdu::klarifikasi.edit', compact('data')) : redirect()->back();
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
                return redirect()->route('lapdu.operator.klarifikasi.edit', ['id' => $id]);
            }
        }

        $data->save();
        return redirect()->route('lapdu.operator.klarifikasi.index');
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
        return $data ? view('lapdu::klarifikasi.proses', compact('data', 'institutions')) : redirect()->back();
    }

    public function warrant($id)
    {
        $data = Report::find($id);
        return $data ? view('lapdu::surat.sp_was2_create', compact('data')) : redirect()->back();
    }

    public function interview($id, Request $request)
    {
        $data = Report::find($id);
        $item = null;

        if ($request->has('subjek') && $request->has('tanggal')) {
            foreach ($data->interviews as $i) {
                if (($i['witness'] == $request->get('subjek')) && ($i['date'] == $request->get('tanggal'))) {
                    $item = $i;
                }
            }

            return $data ? view('lapdu::surat.ba_was2_view', compact('data', 'item')) : redirect()->back();
        } else {
            return $data ? view('lapdu::surat.ba_was2_qna', compact('data')) : redirect()->back();
        }
    }
}