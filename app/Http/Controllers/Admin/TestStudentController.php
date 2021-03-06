<?php

namespace App\Http\Controllers\Admin;

use App\Student;
use App\Test;
use App\TestStudent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testStudents = TestStudent::all();
        return view('admin.teststudent.index', compact('testStudents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tests = Test::all();
        $students = Student::orderBy('class')->get();
        return view('admin.teststudent.create', compact('tests', 'students'));
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
            'test_id'    => 'required|exists:tests,id',
            'students'   => 'required',
            'students.*' => 'exists:students,id'
        ]);

        foreach ($request->get('students') as $student) {
            TestStudent::create([
                'test_id'    => $request->get('test_id'),
                'student_id' => $student,
                'is_active'  => true
            ]);
        }

        return redirect()->route('test-student.index');
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
