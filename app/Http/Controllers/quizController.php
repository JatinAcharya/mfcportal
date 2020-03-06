<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Auth;

class quizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $quizs = DB::table('question')->join('question_set', funtion($join){
        //     $join->on('question.ques_set_id', '=', 'question_set.ques_set_id')
        // })->orderby('ques_set_id')
        // ->get();
        // return($quizs);
        $quizs = DB::table('question')->join('question_set', function($join){
            $join->on('question.ques_set_id', '=', 'question_set.ques_set_id');
        })
        ->get();
        // return($quizs);
        return view('/quiz/test')->with('questions', $quizs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function generate($id)
    {
        $questionAnswered = DB::table('choice')->where('ques_ans', '1')->get();
        $count = $questionAnswered->count();
        $sumOfScore = DB::table('choice')->where([['ques_ans', '1'], ['userId', $id]])->sum('marks');
        DB::update('UPDATE question set ques_ans = 0 WHERE ques_ans = 1');
        DB::update('UPDATE choice set ques_ans = 0 WHERE ques_ans = 1');
        return view('layouts.result')->with('sum', $sumOfScore)->with('noOfQuestionAnswered', $count)->with('details', $questionAnswered);
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
    
    public function update(Request $request)
    {
        // return(Auth::user()->id);
        $ques_id = $request->question_id;
        // return($ques_id);
        $score = DB::table('response_scale')->where('scale', '=', $request->quiz)->value('score');
        DB::update("UPDATE question set ques_ans = 1 WHERE ques_id = $ques_id");
        
        $values = array('userId'=>Auth::user()->id, 'ques_id'=>$ques_id, 'marks' => $score, 'ques_ans'=>1 ) ;
        DB::table('choice')->insert($values);
        $quizs = DB::table('question')->join('question_set', function($join){
            $join->on('question.ques_set_id', '=', 'question_set.ques_set_id');
        })
        ->get();
        return redirect()->back()->with('questions', $quizs);
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
