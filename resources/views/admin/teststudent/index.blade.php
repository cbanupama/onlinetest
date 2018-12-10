@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Tests assigned to students</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Test Name</th>
                                <th>Student name</th>
                                <th>Class</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($testStudents as $testStudent)
                                <tr>
                                    <td>{{ $testStudent->test->name }}</td>
                                    <td>{{ $testStudent->student->user->name }}</td>
                                    <td>{{ $testStudent->student->class }}</td>
                                    <td>{{ $testStudent->is_active ? 'Pending' : 'Given' }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
