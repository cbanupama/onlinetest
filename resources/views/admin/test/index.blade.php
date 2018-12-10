@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Tests</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Subject</th>
                                <th>Teacher</th>
                                <th>Test Type</th>
                                <th>Name</th>
                                <th>Duration</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tests as $test)
                                <tr>
                                    <td>{{ $test->id }}</td>
                                    <td>{{ $test->subject->name }}</td>
                                    <td>{{ $test->teacher->user->name }}</td>
                                    <td>{{ $test->testType->name }}</td>
                                    <td>{{ $test->name }}</td>
                                    <td>{{ $test->duration }} Min</td>
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
