<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFacultyIdForeignKeyClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasColumn('classes', 'faculty_id')) {
            Schema::table('classes', function(Blueprint $table) {
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
        Schema::table('classes', function(Blueprint $table) {
            $table->dropForeign('classes_faculty_id_foreign');
            $table->dropColumn('faculty_id');
        });
    }
}
