<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeySubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasColumn('subjects', 'teacher_id')) {
            Schema::table('subjects', function(Blueprint $table) {
                $table->integer('teacher_id')->unsigned();
                $table->foreign('teacher_id')->references('id')->on('teachers');
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
        Schema::table('subjects', function(Blueprint $table) {
            $table->dropForeign('subjects_teacher_id_foreign');
            $table->dropColumn('teacher_id');
        });
    }
}
