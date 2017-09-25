<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('students_subjects')) {
            Schema::create('students_subjects', function(Blueprint $table) {
               $table->increments('id');
               $table->integer('student_id')->unsigned();
               $table->integer('subject_id')->unsigned();
               $table->foreign('student_id')->references('id')->on('students');
               $table->foreign('subject_id')->references('id')->on('subjects');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students_subjects');
    }
}
