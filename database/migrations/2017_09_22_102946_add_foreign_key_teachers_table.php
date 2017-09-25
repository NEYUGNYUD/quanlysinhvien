<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasColumn('teachers', 'faculty_id')) {
            Schema::table('teachers', function(Blueprint $table) {
               $table->integer('faculty_id')->unsigned();
               $table->foreign('faculty_id')->references('id')->on('faculties');
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
        Schema::table('teachers', function(Blueprint $table) {
            $table->dropForeign('teachers_faculty_id_foreign');
            $table->dropColumn('faculty_id');
        });
    }
}
