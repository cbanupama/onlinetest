@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Assign Test to Students') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('test-student.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="test_id"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Select test') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="test_id" id="test_id">
                                        <option value="">Select test</option>
                                        @foreach($tests as $test)
                                            <option value="{{ $test->id }}">{{ $test->name . ' (' . $test->subject->name . ')' }}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('test_id'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('test_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="questions"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Select students') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="students[]" multiple id="questions">
                                        @foreach($students as $student)
                                            <option value="{{ $student->id }}">{{ $student->user->name . ' (' . $student->class . ')' }}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('students'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('students') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Assign') }}
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
