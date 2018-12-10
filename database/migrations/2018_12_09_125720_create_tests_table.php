<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('subject_id');
            $table->unsignedInteger('teacher_id')->nullable();
            $table->unsignedInteger('test_type_id');
            $table->string('name');
            $table->integer('duration');
            $table->timestamps();

            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->foreign('test_type_id')->references('id')->on('test_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
}
