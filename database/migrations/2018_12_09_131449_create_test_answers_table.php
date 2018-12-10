<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('test_id');
            $table->unsignedInteger('question_id');
            $table->unsignedInteger('question_option_id')->nullable();
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('test_id')->references('id')->on('tests');
            $table->foreign('question_id')->references('id')->on('questions');
            $table->foreign('question_option_id')->references('id')->on('question_options');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_answers');
    }
}
