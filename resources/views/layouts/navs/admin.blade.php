<li class="nav-item">
    <a class="nav-link" href="{{ route('user.index') }}">{{ __('Users') }}</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('role.index') }}">{{ __('Roles') }}</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('student.index') }}">{{ __('Students') }}</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('test-type.index') }}">{{ __('Test Types') }}</a>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" id="questionDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Questions
    </a>
    <div class="dropdown-menu" aria-labelledby="questionDropdown">
        <a class="dropdown-item" href="{{ route('question.index') }}">All</a>
        <a class="dropdown-item" href="{{ route('question.create') }}">Create</a>
    </div>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" id="testDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Tests
    </a>
    <div class="dropdown-menu" aria-labelledby="testDropdown">
        <a class="dropdown-item" href="{{ route('test.index') }}">All</a>
        <a class="dropdown-item" href="{{ route('test.create') }}">Create</a>
    </div>
</li>
@yield('teacher_routes')
