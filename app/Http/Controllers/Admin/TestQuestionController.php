<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Question;
use App\Test;
use App\TestQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class TestQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testQuestions = TestQuestion::where('test_id', Input::get('test'))->get();
        return view('admin.testquestion.index', compact('testQuestions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $test = Test::findOrFail(Input::get('test'));
        $questions = Question::where('subject_id', $test->subject_id)->get();

        return view('admin.testquestion.create', compact('test', 'questions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'test_id'     => 'required|exists:tests,id',
            'questions'   => 'required',
            'questions.*' => 'exists:questions,id'
        ]);

        foreach ($request->get('questions') as $question) {
            TestQuestion::create([
                'test_id'     => $request->get('test_id'),
                'question_id' => $question
            ]);
        }

        return redirect()->route('test-question.index', ['test' => $request->get('test_id')]);
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
