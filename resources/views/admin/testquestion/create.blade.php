@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add Questions to Test') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('add-question.store') }}">
                            @csrf

                            <input type="hidden" name="test_id" value="{{ $test->id }}">

                            <div class="form-group row">
                                <label for="questions"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Hold ctrl to select multiple') }}</label>

                                <div class="col-md-6">
                                    <select name="questions[]" multiple id="questions">
                                        <option value="">Select questions</option>
                                        @foreach($questions as $question)
                                        @endforeach
                                    </select>
                                    <input id="name" type="text"
                                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           name="name" value="{{ old('name') }}" required autofocus>

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
                                        {{ __('Add Question') }}
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
