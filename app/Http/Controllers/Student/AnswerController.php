<?php

namespace App\Http\Controllers\Student;

use App\Test;
use App\TestAnswer;
use App\TestQuestion;
use App\TestStudent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $test = Test::findOrFail(Input::get('test_id'));
        $questions = $test->questions;
        return view('student.answer.create', compact('questions', 'test'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $test = Test::findOrFail($request->get('test_id'));

        foreach ($test->questions as $question) {
            TestAnswer::create([
                'student_id'         => Auth::user()->student->id,
                'test_id'            => $test->id,
                'question_id'        => $question->id,
                'question_option_id' => $request->get($question->id)
            ]);
        }

        $testStudent = TestStudent::query()
            ->where('test_id', $test->id)
            ->where('student_id', Auth::user()->student->id)
            ->first();

        $testStudent->is_active = false;
        $testStudent->save();
        return redirect()->route('mytest.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
