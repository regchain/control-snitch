<?php

namespace EKejaksaan\Lapdu\Http\Controllers\Api;

use EKejaksaan\Lapdu\Models\Report;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QnaController extends Controller
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
        $cond = false;
        $data = Report::find($request->get('id'));
        $witness = $request->get('witness');
        $interviewDate = $request->get('interview_date');
        $interviewer = $request->get('interviewer');
        $qna = [
            'question' => $request->get('question'),
            'answer' => $request->get('answer'),
        ];

        if (!array_key_exists('interviews', $data->klarifikasi)) {
            $temp = ['interviews' => [
                [
                    'witness' => $witness,
                    'interviewer' => $interviewer,
                    'date' => $interviewDate,
                    'qna' => [$qna]
                ]
            ]];
            $data->klarifikasi = array_merge($data->klarifikasi, $temp);
        } else {
            foreach ($data->klarifikasi['interviews'] as $k => $i) {
                if (($i['date'] == $interviewDate) && ($i['witness'] == $witness)) {
                    $interviews = ['interviews' => $data->klarifikasi['interviews']];
                    $qnas = $i['qna'];
                    array_push($qnas, $qna);
                    $interviews['interviews'][$k]['qna'] = $qnas;
                    $data->klarifikasi = array_merge($data->klarifikasi, $interviews);
                    $cond = true;
                }
            }

            if (!$cond) {
                $interviews = ['interviews' => $data->klarifikasi['interviews']];
                array_push($interviews['interviews'], [
                    'witness' => $witness,
                    'interviewer' => $interviewer,
                    'date' => $interviewDate,
                    'qna' => [$qna]
                ]);
                $data->klarifikasi = array_merge($data->klarifikasi, $interviews);
            }
        }

        $data->update();

        return [
            'question' => $qna['question'],
            'answer' => $qna['answer'],
            'witness' => $witness
        ];
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
        $cond = false;
        $data = Report::find($id);
        $witness = $request->get('witness');
        $interviewDate = $request->get('interview_date');
        $summary = $request->get('summary');

        if (!array_key_exists('interviews', $data->klarifikasi)) {
            $temp = ['interviews' => [
                [
                    'witness' => $witness,
                    'interviewer' => $interviewer,
                    'date' => $interviewDate,
                    'qna' => [],
                    'summary' => $summary
                ]
            ]];
            $data->klarifikasi = array_merge($data->klarifikasi, $temp);
        } else {
            foreach ($data->klarifikasi['interviews'] as $k => $i) {
                if (($i['date'] == $interviewDate) && ($i['witness'] == $witness)) {
                    $interviews = ['interviews' => $data->klarifikasi['interviews']];
                    $interviews['interviews'][$k]['summary'] = $summary;
                    $data->klarifikasi = array_merge($data->klarifikasi, $interviews);
                    $cond = true;
                }
            }

            if (!$cond) {
                $interviews = ['interviews' => $data->klarifikasi['interviews']];
                array_push($interviews['interviews'], [
                    'witness' => $witness,
                    'interviewer' => $interviewer,
                    'date' => $interviewDate,
                    'qna' => [$qna]
                ]);
                $data->klarifikasi = array_merge($data->klarifikasi, $interviews);
            }
        }

        $data->update();

        return [];
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