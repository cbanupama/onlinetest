@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Test: {{ $test->name }}
                        </h5>
                        <h5 class="card-title">
                            Subject: {{ $test->subject->name }}
                        </h5>
                        <h5 class="card-title">
                            Score: {{ $test->score }}
                        </h5>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-body">
                        @foreach($questions as $index => $question)
                            <div class="form-group row p-4">
                                <p class="lead">
                                    <strong class="pr-2">{{ $index+1 }})</strong>
                                    {{$question->question}}
                                </p>
                                <div>
                                    @foreach($question->options as $option)
                                        <div class="form-check pl-5">
                                            <p class="lead {{$answers->where('question_id', $question->id)->first()->question_option_id === $option->id ? 'text-success': 'text-danger' }}">
                                                {{ $option->option }}
                                            </p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
