@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Students</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Academic year</th>
                                <th>Class</th>
                                <th>Section</th>
                                <th>Roll number</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <td>{{ $student->user->name }}</td>
                                    <td>{{ $student->academic_year }}</td>
                                    <td>{{ $student->class }}</td>
                                    <td>{{ $student->section }}</td>
                                    <td>{{ $student->roll_number }}</td>
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
