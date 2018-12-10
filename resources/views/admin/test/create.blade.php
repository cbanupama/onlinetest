@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Question') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('test.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Test name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="subject_id"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Select subject') }}</label>

                                <div class="col-md-6">
                                    <select id="subject_id" class="form-control" name="subject_id" required>
                                        <option value="">Select subject</option>
                                        @foreach($subjects as $subject)
                                            <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('subject_id'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('subject_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="teacher_id"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Select teacher') }}</label>

                                <div class="col-md-6">
                                    <select id="teacher_id" class="form-control" name="teacher_id" required>
                                        <option value="">Select teacher</option>
                                        @foreach($teachers as $teacher)
                                            <option value="{{ $teacher->id }}">{{ $teacher->user->name }}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('teacher_id'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('teacher_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="test_type_id"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Select test type') }}</label>

                                <div class="col-md-6">
                                    <select id="test_type_id" class="form-control" name="test_type_id" required>
                                        <option value="">Select test type</option>
                                        @foreach($testTypes as $type)
                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('test_type_id'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('test_type_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="duration" class="col-md-4 col-form-label text-md-right">{{ __('Duration in minutes') }}</label>

                                <div class="col-md-6">
                                    <input id="duration" type="number" class="form-control{{ $errors->has('duration') ? ' is-invalid' : '' }}" name="duration" value="{{ old('duration') }}" required autofocus>

                                    @if ($errors->has('duration'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('duration') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add Test') }}
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
