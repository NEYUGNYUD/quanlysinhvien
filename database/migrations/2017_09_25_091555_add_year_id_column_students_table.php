<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddYearIdColumnStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasColumn('students', 'year_start')) {
            Schema::table('students', function(Blueprint $table) {
                $table->integer('year_start')->unsigned();
                $table->foreign('year_start')->references('id')->on('years');
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
            $table->dropForeign('students_year_start_foreign');
            $table->dropColumn('year_start');
        });
    }
}
