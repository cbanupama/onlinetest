@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title">
                                        Test: {{ $test->name }}
                                    </h5>
                                    <h5 class="card-title">
                                        Subject: {{ $test->subject->name }}
                                    </h5>
                                    <h5 class="card-title">
                                        Duration: {{ $test->duration }}
                                    </h5>
                        </div>
                        <div class="col">
                            Timeout
                            <h5 class="cart-title display-4" id="timer">
                                
                            </h5>
                        </div>
                    </div>

                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-body">
                        <form id="answerForm" method="POST" action="{{ route('answer.store') }}">
                            @csrf

                            <input type="hidden" name="test_id" value="{{ $test->id }}">

                            @foreach($questions as $index => $question)
                                <div class="form-group row p-4">
                                    <p class="lead">
                                        <strong class="pr-2">{{ $index+1 }})</strong>
                                        {{$question->question}}
                                    </p>
                                    <div>
                                        @foreach($question->options as $option)
                                            <div class="form-check pl-5">
                                                <input class="form-check-input" type="radio" name="{{ $question->id }}"
                                                       id="{{ $option->id }}" value="{{ $option->id }}">
                                                <label class="form-check-label lead" for="{{ $option->id }}">
                                                    {{ $option->option }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach

                            <div class="form-group row mb-0">
                                <div class="col-md-4 offset-md-4">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        {{ __('Submit') }}
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

@section('script')
<script type="text/javascript">
    var duration = parseInt("{{ $test->duration }}") * 60;
    var seconds = duration;
    function timer() {
        var days        = Math.floor(seconds/24/60/60);
        var hoursLeft   = Math.floor((seconds) - (days*86400));
        var hours       = Math.floor(hoursLeft/3600);
        var minutesLeft = Math.floor((hoursLeft) - (hours*3600));
        var minutes     = Math.floor(minutesLeft/60);
        var remainingSeconds = seconds % 60;
        
        function pad(n) {
            return (n < 10 ? "0" + n : n);
        }

        document.getElementById('timer').innerHTML = pad(hours) + ":" + pad(minutes) + ":" + pad(remainingSeconds);
        
        if (seconds == 0) {
            clearInterval(countdownTimer);
            document.getElementById('timer').innerHTML = "Completed";
            $('#answerForm').submit();
        } else {
            seconds--;
        }
}
var countdownTimer = setInterval('timer()', 1000);
</script>
@endsection