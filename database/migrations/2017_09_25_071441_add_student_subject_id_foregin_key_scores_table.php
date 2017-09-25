<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStudentSubjectIdForeginKeyScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasColumn('scores', 'student_subject_id')) {
            Schema::table('scores', function(Blueprint $table) {
                $table->integer('student_subject_id')->unsigned();
                $table->foreign('student_subject_id')->references('id')->on('students_subjects');
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
        Schema::table('scores', function(Blueprint $table) {
            $table->dropColumn('student_subject_id');
            $table->dropForeign('student_subject_id');
        });
    }
}
