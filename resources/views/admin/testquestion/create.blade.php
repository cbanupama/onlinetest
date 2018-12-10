@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add Questions to Test') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('test-question.store') }}">
                            @csrf

                            <input type="hidden" name="test_id" value="{{ $test->id }}">

                            <div class="form-group row">
                                <label for="questions"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Select questions') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="questions[]" multiple id="questions">
                                        @foreach($questions as $question)
                                            <option value="{{ $question->id }}">{{ $question->question }}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('questions'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('questions') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add Questions') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
