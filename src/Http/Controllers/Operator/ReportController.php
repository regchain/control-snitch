<?php

namespace Regchain\ControlSnitch\Http\Controllers\Operator;

use EKejaksaan\Core\Models\Institution;
use EKejaksaan\Core\Models\User;
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
        $new = Report::where('lapdu.analysis', NULL)
            ->where('reporteds', '!=', NULL)
            ->where('reporters', '!=', NULL)
            ->get();

        $advanced = Report::where('lapdu.analysis', '!=', NULL)
            ->where('lapdu.date_warrant', NULL)
            ->where('reporteds', '!=', NULL)
            ->where('reporters', '!=', NULL)
            ->get();

        $type = 'lapdu';

        return view('control-snitch::lapdu.list', compact('new', 'advanced', 'type'));
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
        return view('control-snitch::lapdu.create', compact('data'));
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
        $type = 'lapdu';
        $previousType = 'lapdu';
        return $data ? view('control-snitch::lapdu.view', compact('data', 'type', 'previousType')) : redirect()->back();
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
        return $data ? view('control-snitch::lapdu.edit', compact('data')) : redirect()->back();
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
        $redirect = '';

        foreach ($input as $k => $i) {
            if ($k != 'files') {
                if (in_array($k, ['lapdu', 'klarifikasi', 'inspeksi'])) {
                    $redirect = $k;

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
        return redirect()->route('lapdu.operator.'.$redirect.'.index');
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
        $type = 'lapdu';
        $previousType = 'lapdu';
        return $data ? view('control-snitch::lapdu.disposisi', compact('data', 'institutions', 'type', 'previousType')) : redirect()->back();
    }

    public function warrant($id)
    {
        $data = Report::find($id);
        $users = User::where('institute', '!=', NULL)
            ->where('unit', 'PENGAWASAN')
            ->get();
        $type = 'lapdu';
        $previousType = 'lapdu';
        return $data ? view('control-snitch::surat.sp_was1_create', compact('data', 'users', 'type', 'previousType')) : redirect()->back();
    }

    public function study($id)
    {
        $data = Report::find($id);
        $type = 'lapdu';
        $previousType = 'lapdu';
        return $data ? view('control-snitch::surat.was1_create', compact('data', 'type', 'previousType')) : redirect()->back();
    }
}