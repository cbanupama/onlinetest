<?php

namespace App\Http\Controllers\Admin;

use App\Question;
use App\QuestionOption;
use App\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::paginate(20);
        return view('admin.question.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::all();
        return view('admin.question.create', compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateRequest($request);

        $question = Question::create([
            'subject_id' => $request->get('subject_id'),
            'question'   => $request->get('question')
        ]);

        foreach (range(1, 4) as $index) {
            QuestionOption::create([
                'question_id' => $question->id,
                'option'      => $request->get('option' . $index),
                'is_answer'   => $request->get('is_answer') === "option{$index}"
            ]);
        }

        return redirect()->route('question.index');
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

    /**
     * Validate request
     *
     * @param Request $request
     */
    protected function validateRequest(Request $request): void
    {
        $optionRules = [];
        foreach (range(1, 4) as $value) {
            $optionRules['option' . $value] = 'required|string';
        }
        $request->validate(array_merge(
            [
                'subject_id' => 'required|exists:subjects,id',
                'question'   => 'required|string',
                'is_answer'  => 'required|string'
            ],
            $optionRules
        ));
    }
}
