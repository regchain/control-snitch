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
        $type = $request->get('type');
        $qna = [
            'question' => $request->get('question'),
            'answer' => $request->get('answer'),
        ];

        if (!array_key_exists('interviews', $data->$type)) {
            $temp = ['interviews' => [
                [
                    'witness' => $witness,
                    'interviewer' => $interviewer,
                    'date' => $interviewDate,
                    'qna' => [$qna]
                ]
            ]];
            $data->$type = array_merge($data->$type, $temp);
        } else {
            foreach ($data->$type['interviews'] as $k => $i) {
                if (($i['date'] == $interviewDate) && ($i['witness'] == $witness)) {
                    $interviews = ['interviews' => $data->$type['interviews']];
                    $qnas = $i['qna'];
                    array_push($qnas, $qna);
                    $interviews['interviews'][$k]['qna'] = $qnas;
                    $data->$type = array_merge($data->$type, $interviews);
                    $cond = true;
                }
            }

            if (!$cond) {
                $interviews = ['interviews' => $data->$type['interviews']];
                array_push($interviews['interviews'], [
                    'witness' => $witness,
                    'interviewer' => $interviewer,
                    'date' => $interviewDate,
                    'qna' => [$qna]
                ]);
                $data->$type = array_merge($data->$type, $interviews);
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
        $type = $request->get('type');

        if (!array_key_exists('interviews', $data->$type)) {
            $temp = ['interviews' => [
                [
                    'witness' => $witness,
                    'interviewer' => $interviewer,
                    'date' => $interviewDate,
                    'qna' => [],
                    'summary' => $summary
                ]
            ]];
            $data->$type = array_merge($data->$type, $temp);
        } else {
            foreach ($data->$type['interviews'] as $k => $i) {
                if (($i['date'] == $interviewDate) && ($i['witness'] == $witness)) {
                    $interviews = ['interviews' => $data->$type['interviews']];
                    $interviews['interviews'][$k]['summary'] = $summary;
                    $data->$type = array_merge($data->$type, $interviews);
                    $cond = true;
                }
            }

            if (!$cond) {
                $interviews = ['interviews' => $data->$type['interviews']];
                array_push($interviews['interviews'], [
                    'witness' => $witness,
                    'interviewer' => $interviewer,
                    'date' => $interviewDate,
                    'qna' => [$qna]
                ]);
                $data->$type = array_merge($data->$type, $interviews);
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