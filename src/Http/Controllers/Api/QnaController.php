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

        if (!$data->interviews) {
            $data->interviews = [
                [
                    'witness' => $witness,
                    'interviewer' => $interviewer,
                    'date' => $interviewDate,
                    'qna' => [$qna]
                ]
            ];
        } else {
            foreach ($data->interviews as $k => $i) {
                if (($i['date'] == $interviewDate) && ($i['witness'] == $witness)) {
                    $interviews = $data->interviews;
                    $qnas = $i['qna'];
                    array_push($qnas, $qna);
                    $interviews[$k]['qna'] = $qnas;
                    $data->interviews = $interviews;
                    $cond = true;
                }
            }

            if (!$cond) {
                $interviews = $data->interviews;
                array_push($interviews, [
                    'witness' => $witness,
                    'interviewer' => $interviewer,
                    'date' => $interviewDate,
                    'qna' => [$qna]
                ]);

                $data->interviews = $interviews;
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

        if (!$data->interviews) {
            $data->interviews = [
                [
                    'witness' => $witness,
                    'interviewer' => $interviewer,
                    'date' => $interviewDate,
                    'qna' => [],
                    'summary' => $summary
                ]
            ];
        } else {
            foreach ($data->interviews as $k => $i) {
                if (($i['date'] == $interviewDate) && ($i['witness'] == $witness)) {
                    $interviews = $data->interviews;
                    $interviews[$k]['summary'] = $summary;
                    $data->interviews = $interviews;
                    $cond = true;
                }
            }

            if (!$cond) {
                $interviews = $data->interviews;
                array_push($interviews, [
                    'witness' => $witness,
                    'interviewer' => $interviewer,
                    'date' => $interviewDate,
                    'qna' => [],
                    'summary' => $summary
                ]);

                $data->interviews = $interviews;
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