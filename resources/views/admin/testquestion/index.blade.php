@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Test Questions</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Test ID</th>
                                <th>Question</th>
                                <th>Options</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($testQuestions as $testQuestion)
                                <tr>
                                    <td>{{ $testQuestion->test->id }}</td>
                                    <td>{{ $testQuestion->question->question }}</td>
                                    <td>
                                        @foreach($testQuestion->question->options as $option)
                                            <span class="{{ $option->is_answer ? 'bg-success': '' }}">{{ $option->option }}</span> <br>
                                        @endforeach
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
