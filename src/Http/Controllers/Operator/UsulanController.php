<?php

namespace Regchain\ControlSnitch\Http\Controllers\Operator;

use EKejaksaan\Core\Models\Institution;
use EKejaksaan\Core\Models\User;
use Regchain\ControlSnitch\Models\Report;
use EKejaksaan\Core\Models\Punishment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsulanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $new = Report::where('inspeksi.date_warrant', '!=', NULL)
            ->where('inspeksi.interviews', NULL)
            ->get();

        $advanced = Report::where('inspeksi.interviews', '!=', NULL)
            ->get();

        $type = 'inspeksi';

        return view('control-snitch::usulan.list', compact('new', 'advanced', 'type'));
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
        $type = 'inspeksi';
        $previousType = 'klarifikasi';
        return $data ? view('control-snitch::inspeksi.view', compact('data', 'type', 'previousType')) : redirect()->back();
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
        $type = 'inspeksi';
        return $data ? view('control-snitch::inspeksi.edit', compact('data', 'type')) : redirect()->back();
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

    public function action($id)
    {
        $data = Report::find($id);
        $punishments = Punishment::where('report_id', $id)->get();
        $institutions = Institution::get();
        $type = 'inspeksi';
        $previousType = 'klarifikasi';
        return $data ? view('control-snitch::inspeksi.disposisi', compact('data', 'institutions', 'type', 'previousType', 'punishments')) : redirect()->back();
    }

    public function warrant($id)
    {
        $data = Report::find($id);
        $users = User::where('institute', '!=', NULL)
            ->where('unit', 'PENGAWASAN')
            ->get();
        $type = 'inspeksi';
        $previousType = 'klarifikasi';
        return $data ? view('control-snitch::surat.was15_create', compact('data', 'users', 'type', 'previousType')) : redirect()->back();
    }

    public function interview($id, Request $request)
    {
        $data = Report::find($id);
        $item = null;
        $type = 'inspeksi';

        if ($request->has('subjek') && $request->has('tanggal')) {
            foreach ($data->interviews as $i) {
                if (($i['witness'] == $request->get('subjek')) && ($i['date'] == $request->get('tanggal'))) {
                    $item = $i;
                }
            }

            return $data ? view('control-snitch::surat.ba_was3_view', compact('data', 'item', 'type')) : redirect()->back();
        } else {
            return $data ? view('control-snitch::surat.ba_was3_qna', compact('data', 'type')) : redirect()->back();
        }
    }

    public function report($id)
    {
        $data = Report::find($id);
        $type = 'inspeksi';
        // $punishments = Punishment::where('report_id', $id)->get();

        // if ($punishments->isEmpty()) {
        //     $punishments = [];

        //     foreach ($data->reporteds as $r) {
        //         if ($r['status'] == 'terlapor') {
        //             $punishments[] = Punishment::create([
        //                 'report_id' => $id,
        //                 'name' => $r['name'],
        //                 'detail' => $r['nip'].' | '.$r['nrp'].' | '.$r['jobtitle']
        //             ]);
        //         }
        //     }
        // }

        return view('control-snitch::surat.l_was2_create', compact('data', 'type'));
    }
}