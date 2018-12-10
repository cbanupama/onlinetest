@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Question') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('question.store') }}">
                            @csrf

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
                                <label for="question"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Question') }}</label>

                                <div class="col-md-6">
                                    <textarea id="question"
                                              class="form-control {{ $errors->has('question') ? ' is-invalid': '' }}"
                                              name="question" required></textarea>

                                    @if ($errors->has('question'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('question') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            @foreach(range(1, 4) as $index)
                                <div class="form-group row">
                                    <label for="{{ "option{$index}" }}"
                                           class="col-md-4 col-form-label text-md-right">{{ "Option {$index}" }}</label>

                                    <div class="col-md-4">
                                        <input id="{{ "option{$index}" }}"
                                               class="form-control {{ $errors->has("option{$index}") ? ' is-invalid': '' }}"
                                               name="{{"option{$index}"}}" required>

                                        @if ($errors->has("option{$index}"))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first("option{$index}") }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-2">
                                        <label>
                                            <input class="form-check-input" type="radio" value="{{ "option{$index}" }}" name="is_answer">
                                            Is answer
                                        </label>
                                    </div>
                                </div>
                            @endforeach

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
