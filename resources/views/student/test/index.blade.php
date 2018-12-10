@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Your tests</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Test Name</th>
                                <th>Subject</th>
                                <th>Duration</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($myTests as $myTest)
                                <tr>
                                    <td>{{ $myTest->test->name }}</td>
                                    <td>{{ $myTest->test->subject->name }}</td>
                                    <td>{{ $myTest->test->duration }} Min</td>
                                    <td>
                                        <a href="{{ route('answer.create', ['test_id' => $myTest->test->id]) }}" class="btn btn-sm btn-success">Give Test</a>
                                    </td>
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
