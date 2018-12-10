<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_students', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('test_id');
            $table->unsignedInteger('student_id');
            $table->boolean('is_active')->default(false);
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('test_id')->references('id')->on('tests');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_students');
    }
}
