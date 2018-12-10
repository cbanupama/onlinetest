<?php

// main website route
Route::get('/', 'WelcomeController@index');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Administrator routes
Route::prefix('admin')->namespace('Admin')->middleware('role:admin')->group(function () {
    Route::resource('user', 'UserController');
    Route::resource('role', 'RoleController');
    Route::resource('student', 'StudentController');
    Route::resource('teacher', 'TeacherController');
    Route::resource('subject', 'SubjectController');
    Route::resource('test-type', 'TestTypeController');
    Route::resource('test', 'TestController');
    Route::resource('test-question', 'TestQuestionController');
});

// Teacher routes
Route::namespace('Admin')->middleware('role:admin|teacher')->group(function () {
    Route::resource('question', 'QuestionController');
    Route::resource('test-student', 'TestStudentController');
});

// Student routes


// One time setup only
Route::get('setup', function () {
    $admin = \App\User::where('email', 'admin@example.com')->first();
    $admin->assignRole('admin');

    $teacher = \App\User::where('email', 'teacher@example.com')->first();
    $teacher->assignRole('teacher');

    $student = \App\User::where('sts_number', '1234567890123')->first();
    $student->assignRole('student');
});
