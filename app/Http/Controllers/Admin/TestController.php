<?php

namespace App\Http\Controllers\Admin;

use App\Question;
use App\Subject;
use App\Teacher;
use App\Test;
use App\TestType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tests = Test::all();
        return view('admin.test.index', compact('tests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::all();
        $teachers = Teacher::all();
        $testTypes = TestType::all();

        return view('admin.test.create', compact('subjects', 'teachers', 'testTypes'));
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
            'subject_id'   => 'required|exists:subjects,id',
            'teacher_id'   => 'required|exists:teachers,id',
            'test_type_id' => 'required|exists:test_types,id',
            'name'         => 'required|string',
            'duration'     => 'required|integer|min:1'
        ]);

        $test = Test::create([
            'subject_id'   => $request->get('subject_id'),
            'teacher_id'   => $request->get('teacher_id'),
            'test_type_id' => $request->get('test_type_id'),
            'name'         => $request->get('name'),
            'duration'     => $request->get('duration')
        ]);

        $questions = Question::where('subject_id', $request->get('subject_id'))->get();
        return view('admin.testquestion.create', compact('test', 'questions'));
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
